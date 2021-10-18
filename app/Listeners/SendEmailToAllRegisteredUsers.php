<?php

namespace App\Listeners;

use App\Notifications\SetGoingToStart;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToAllRegisteredUsers implements ShouldQueue
{



    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        $notif = new SetGoingToStart();
        foreach ($event->users as $user)
            $user->notify($notif);


    }
}
