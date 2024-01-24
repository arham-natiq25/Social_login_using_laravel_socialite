<?php

namespace App\Actions\Social\Contracts;

use App\Models\User;

interface CreateUser
{
    public function create($user) :User ;
}
