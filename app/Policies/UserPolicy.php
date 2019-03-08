<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(){
        //

    }


    public function update(User $currentUsers, User $user){

        return $currentUsers->id === $user->id;
    }


    public function destroy(User $currentUsers , User $user){

        return $currentUsers->is_admin && $currentUsers->id !== $user->id;
    }
}
