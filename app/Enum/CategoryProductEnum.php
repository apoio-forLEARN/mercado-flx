<?php

namespace App\Enum;

use App\Models\CategoryProduct;

class CategoryProductEnum{

    public const PERMISSION_SUPER = "PERMISSION_SUPER";
    public const PERMISSION_DEV = "PERMISSION_DEV";
    public const PERMISSION_ADMIN = "PERMISSION_ADMIN";

    public const PERMISSION_VIEW = "PERMISSION_VIEW";
    public const PERMISSION_STORE = "PERMISSION_STORE";
    public const PERMISSION_UPDATE = "PERMISSION_UPDATE";
    public const PERMISSION_DELETE = "PERMISSION_DELETE";

    public const PERMISSION_USER_VIEW = "PERMISSION_USER_VIEW";
    public const PERMISSION_USER_STORE = "PERMISSION_USER_STORE";
    public const PERMISSION_USER_UPDATE = "PERMISSION_USER_UPDATE";
    public const PERMISSION_USER_DELETE = "PERMISSION_USER_DELETE";

    public const PERMISSION_ROLE_VIEW = "PERMISSION_ROLE_VIEW";
    public const PERMISSION_ROLE_STORE = "PERMISSION_ROLE_STORE";
    public const PERMISSION_ROLE_UPDATE = "PERMISSION_ROLE_UPDATE";
    public const PERMISSION_ROLE_DELETE = "PERMISSION_ROLE_DELETE";

    public static function values(){
        return [
            new CategoryProduct(["code"=>PermissionEnum::PERMISSION_SUPER, "name"=>"permissão super utilizador","description" => "permite o acesso total para os super usuários"]),
            new CategoryProduct(["code"=>PermissionEnum::PERMISSION_DEV, "name"=>"permissão desenvolvedor","description" => "permite o acesso total para os desenvolvedores"]),
            new CategoryProduct(["code"=>PermissionEnum::PERMISSION_ADMIN, "name"=>"criar permissão","description" => "permite o acesso total para administradores"]),
        ];
    }

}
