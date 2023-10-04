<?php

namespace App\Services;

use App\Models\User;

class UserService{

    public function saveOrUpdateByEmail(User $user){
        $data = $user->getAttributes();
        User::updateOrCreate(['email' => $data['email']],$data);
    }

}
