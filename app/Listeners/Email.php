<?php

namespace App\Listeners;

use App\Events\UserHasRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasRegister  $event
     * @return void
     */
    public function handle(UserHasRegister $event)
    {
        echo 'The User ' . $event->name . ' Has Register';
    }
}
