<?php

namespace App\Http\Controllers;

use App\Events\UserQuotaCompleted;
use App\Hopeewinner;
use App\Notifications\SetGoingToStart;
use App\Set;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class FrontSetController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function registration(Set $set,Request $request){
//
//        $user = Auth::user();
//
//        foreach ($set->users()->get() as $newuser){
//            if ($newuser->id === $user->id){
//                return redirect()->back()->withErrors(['You are Already registered to this set', 'The Message']);
//                break;
//            }
//
//        }
//        $security = $request->security;
//
//        if ($security<(int)round($set->totalamountperperson / 100 * 20 + 50,-2))
//            return redirect()->back()->withErrors(['Too low security', 'The Message']);;
//        return view('frontend.payment',compact('set','security'));
//
//    }
    public function security($set,Request $request){


        $set = Set::find($set);

        $user = Auth::user();

        $data = $request->validate([
            'security' => 'integer:required'
        ]);

//        dd($set->users()->get());

        $security = $data['security'];
        foreach ($set->users()->get() as $newuser){
            if ($newuser->id === $user->id){
                return redirect()->back()->withErrors(['You are Already registered to this set', 'The Message']);
                break;
            }

        }
        if ($security <= decrypt($user->credit->amount) && $security >= (int)round($set->totalamountperperson / 100 * 20 + 50,-2)){
            $user->deductCredits($security);
            $user->sets()->syncWithoutDetaching([$set->id]);
            $user->sets()->updateExistingPivot($set->id, ['security' => $security, 'amountdeposited' => $security]);

            $totalusers = $set->users()->get();
            $i = 0;
            foreach ($totalusers as $x) {
                $i++;
            }


            $set->update([
                'currentusers' => $i
            ]);


            if ($set->currentusers == $set->totalusers) {
                $users = $set->users()->get();
                event(new UserQuotaCompleted($users));
                $set->update([
                    'state' => 'progress',
                    'startdate' => Carbon::tomorrow()->timezone('PKT')->toDate(),
                    'tommorow' => Carbon::tomorrow()->addDay()->timezone('PKT')->toDate(),
                    'enddate' => Carbon::tomorrow()->timezone('PKT')->addDays($set->totalday)->toDate(),
                ]);
            }
            return redirect()->route('front.index');
        }
        else
            return redirect()->route('userdash.creditdep')->withErrors(['You are Low in funds Please Deposit funds first', 'The Message']);

    }

    public function hopeefeedupdate(Hopeewinner $hopee,Request $request){


        $data = $request->validate(['feedback'=> 'string:required']);


        $hopee->update([
            'feedback'=> $data['feedback']
        ]);

        return redirect()->back()->withErrors(['Your Feedback has been updated', 'The Message']);
    }

}
