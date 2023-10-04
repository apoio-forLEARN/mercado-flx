<?php

namespace App\Enum;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserEnum{

    public static function super()  {
        return new User(["email"=>"user.super@exemple.com","name"=>"user.super", "password"=> Hash::make("password"), "birthday" => "1999-01-01", "phone" => "909000121"]);
    }

    public static function admin()  {
        return new User(["email"=>"user.admin@exemple.com","name"=>"user.admin", "password"=> Hash::make("password"), "birthday" => "1999-01-02", "phone" => "909000122"]);
    }

    public static function client()  {
        return new User(["email"=>"user.client@exemple.com","name"=>"user.client", "password"=> Hash::make("password"), "birthday" => "1999-01-03", "phone" => "909000123"]);
    }

    public static function employee()  {
        return new User(["email"=>"user.employee@exemple.com","name"=>"user.empoyee", "password"=> Hash::make("password"), "birthday" => "1999-01-04", "phone" => "909000124"]);
    }

    public static function dev()  {
        return new User(["email"=>"user.dev@exemple.com","name"=>"user.dev", "password"=> Hash::make("password"), "birthday" => "1999-01-05", "phone" => "909000125"]);
    }

    public static function values(){
        return [
            UserEnum::super(),
            UserEnum::admin(),
            UserEnum::dev(),
            UserEnum::employee(),
            UserEnum::client(),
        ];
    }

}
