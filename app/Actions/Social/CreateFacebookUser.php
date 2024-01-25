<?php

namespace App\Actions\Social;

use App\Actions\Social\Contracts\CreateUser;
use App\Models\User;

class CreateFacebookUser implements CreateUser {

    function create($user): User
    {
       return User::firstOrCreate([
            'facebook_id'=>$user->getId(),
          ],[
            'name'=>$user->getName(),
            'email'=>$user->getEmail(),
          ]);
    }
}
