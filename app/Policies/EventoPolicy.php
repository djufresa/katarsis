<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Evento;
use App\Models\EventoUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function enrolled(User $user, Evento $curso){
        
        return $curso->users->contains($user->id);
    }
}
