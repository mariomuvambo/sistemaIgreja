<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\notificaUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class notificarUserCadastro
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        //
        $user = User::find($event->user->id);
        $user->notify(new notificaUser($user));
    }
}
