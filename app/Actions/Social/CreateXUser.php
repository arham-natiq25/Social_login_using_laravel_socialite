<?php

namespace App\Actions\Social;

use App\Actions\Social\Contracts\CreateUser;
use App\Models\User;

class CreateXUser implements CreateUser {

    function create($user): User
    {
       return User::firstOrCreate([
            'x_id'=>$user->getId(),
          ],[
            'name'=>$user->getName(),
            'email'=>$user->getEmail(),
          ]);
    }
}
