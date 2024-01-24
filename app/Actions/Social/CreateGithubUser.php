<?php

namespace App\Actions\Social;

use App\Actions\Social\Contracts\CreateUser;
use App\Models\User;

class CreateGithubUser implements CreateUser {

    function create($user): User
    {
       return User::firstOrCreate([
            'github_id'=>$user->getId(),
          ],[
            'name'=>$user->getName(),
            'email'=>$user->getEmail(),
          ]);
    }
}
