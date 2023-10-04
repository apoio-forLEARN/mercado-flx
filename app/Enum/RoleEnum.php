<?php

namespace App\Enum;

use App\Models\Role;

class RoleEnum{
    public const ROLE_SUPER = "ROLE_SUPER";
    public const ROLE_ADMIN = "ROLE_ADMIN";
    public const ROLE_CLIENT = "ROLE_CLIENT";
    public const ROLE_EMPLOYEE = "ROLE_EMPLOYEE";
    public const ROLE_DEV = "ROLE_DEV";

    public static function values(){
        return [
            new Role(["code"=>RoleEnum::ROLE_SUPER, "name"=>"cargo super utilizador","description" => "operações realizado pelos super utilizadores"]),
            new Role(["code"=>RoleEnum::ROLE_ADMIN, "name"=>"cargo administrador","description" => "operações realizado pelos administrador"]),
            new Role(["code"=>RoleEnum::ROLE_CLIENT, "name"=>"cargo cliente","description" => "operações realizado pelos clientes"]),
            new Role(["code"=>RoleEnum::ROLE_EMPLOYEE, "name"=>"cargo funcionário","description" => "operações realizado pelos funcionários"]),
            new Role(["code"=>RoleEnum::ROLE_DEV, "name"=>"cargo desenvolvedor","description" => "operações realizado pelos desenvolvedores"]),
        ];
    }

}
