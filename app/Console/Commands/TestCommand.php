<?php

namespace App\Console\Commands;

use App\Hopeewinner;
use App\Notifications\HopeeNotWon;
use App\Notifications\HopeeWon;
use App\Notifications\PaymentNotDone;
use App\Notifications\SetGoingToStart;
use App\Notifications\UserUnregistered;
use App\Set;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Command is here';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $hopeewon = new HopeeWon();
        $hopeenotwon = new HopeeNotWon();
        $unregistered = new UserUnregistered();
        $paymentnotdone = new PaymentNotDone();

        $progress = Set::where('state','progress')->get();

        foreach($progress as $prog){
            $prog->update([
                'state'=>'active'
            ]);
        }

        //data for crontab command
        $sets = Set::where('state','active')->get();
        foreach($sets as $set){
            $set->update([
                'dayspassed' => $set->dayspassed + 1,
            ]);


            $users = $set->users()->get();
            foreach ($users as $user){
                if ($user->pivot->yesterdaypayment == false || $user->pivot->twodaybeforepayment == false){
                    $user->sets()->detach($set);
                    $user->notify($unregistered);
                }
            }

            if ($set->dayspassed == $set->totalday){
                $set->update(['state'=> 'history']);
                foreach ($users as $user){
                    if ($set->totalamountperperson != $user->pivot->amountdeposited){
                        $user->sets()->detach($set);
                        $user->notify($unregistered);
                    }
                }

                $randoms = $set->users()->inRandomOrder()->limit(3)->get();
                $rests = $set->users()->except($randoms[0]->id,$randoms[1]->id,$randoms[2]->id);
                foreach ($rests as $rest){
                    $rest->addCredits($set->returnperperson);
                    $rest->notify($hopeenotwon);
                }
                //refunding down here nowa
                for ($i=0;$i<3;$i++){
                    $user=$randoms[$i];
                    self::sendMessage($user->number,'You have won thee hopee very much congratulations and visit the web as soon as you can to get your amount. Regards: WeGiveHopee');
                    $hopee = new Hopeewinner();
                    $hopee->user_id = $user->id;
                    $hopee->user->notify($hopeewon);
                    $hopee->set_id = $set->id;
                    switch ($i){
                        case 0:
                            $user->addCredits($set->firsthopee);
                            $hopee->number = '1st';
                            $hopee->amount = $set->firsthopee;

                            break;
                        case 1:
                            $user->addCredits($set->secondhopee);
                            $hopee->number = '2nd';
                            $hopee->amount = $set->secondhopee;

                            break;
                        case 2:
                            $user->addCredits($set->thirdhopee);
                            $hopee->number = '3rd';
                            $hopee->amount = $set->thirdhopee;
                            break;
                    }
                    $hopee->save();
                }
            }
            else{
                if(now()->toDateString() == $set->tommorow){
                    foreach ($users as $user){
                        if ($user->pivot->todaypayment) {
                            $set->users()->updateExistingPivot($user->id,[
                                'todaypayment' => false
                            ]);
                        }
                        else{
                            $user->notify($paymentnotdone);
                            if($user->pivot->security%$set->perday==0 && $user->pivot->security<100){
                                $set->users()->updateExistingPivot($user->id,[
                                    'security' => $user->pivot->todaypayment - $set->perdayamount
                                ]);
                            }
                            else {
                                $set->users()->updateExistingPivot($user->id,[
                                    'todaypayment' => false
                                ]);
                                if ($user->pivot->yesterdaypayment == 0)
                                    $set->users()->updateExistingPivot($user->id,[
                                        'twodaybeforepayment' => false
                                    ]);
                                $set->users()->updateExistingPivot($user->id,[
                                    'yesterdaypayment' => false
                                ]);
                            }
                        }
                    }
                    $set->update([
                        'tommorow' => now()->addDay()->toDate()
                    ]);
                }
            }
        }
    }

    public function sendMessage($contact,$message){
        $contact[0]= '+';
        $contact = str_replace("+", "+92", $contact);
        $url = "https://semysms.net/api/3/sms.php"; //Url address for sending SMS
        $phone = $contact; // Phone number
        $msg = $message;  // Message
        $device = '231970';  //  Device code
        $token = 'c86c17b168f047282eb5cf7b0e48ad57';  //  Your token (secret)

        $data = array(
            "phone" => $phone,
            "msg" => $msg,
            "device" => $device,
            "token" => $token
        );

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_exec($curl);
        curl_close($curl);
    }
}
