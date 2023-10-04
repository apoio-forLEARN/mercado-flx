<?php

namespace App\Enum;

use App\Enum\PermissionEntity;
use App\Models\Permission;

class PermissionEnum{

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
            new Permission(["code"=>PermissionEnum::PERMISSION_SUPER, "name"=>"permissão super utilizador","description" => "permite o acesso total para os super usuários", "group" => PermissionGroupEnum::SPECIAL]),
            new Permission(["code"=>PermissionEnum::PERMISSION_DEV, "name"=>"permissão desenvolvedor","description" => "permite o acesso total para os desenvolvedores", "group" => PermissionGroupEnum::SPECIAL]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ADMIN, "name"=>"criar permissão","description" => "permite o acesso total para administradores", "group" => PermissionGroupEnum::SPECIAL]),

            new Permission(["code"=>PermissionEnum::PERMISSION_VIEW, "name"=>"ver permissão","description" => "permite visualizar as permissões", "group" => PermissionGroupEnum::VIEW, "entity" =>PermissionEntity::PERMISSION]),
            new Permission(["code"=>PermissionEnum::PERMISSION_STORE, "name"=>"criar permissão","description" => "permite cadastrar uma permissão", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntity::PERMISSION]),
            new Permission(["code"=>PermissionEnum::PERMISSION_UPDATE, "name"=>"editar permissão","description" => "permite actualizar os dados uma permissão", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntity::PERMISSION]),
            new Permission(["code"=>PermissionEnum::PERMISSION_DELETE, "name"=>"apagar permissão","description" => "permite eliminar uma permissão", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntity::PERMISSION]),

            new Permission(["code"=>PermissionEnum::PERMISSION_USER_VIEW, "name"=>"ver utilizador","description" => "permite visualizar os utilizadores", "group" => PermissionGroupEnum::VIEW, "entity" => PermissionEntity::USER]),
            new Permission(["code"=>PermissionEnum::PERMISSION_USER_STORE, "name"=>"criar utilizador","description" => "permite cadastrar um utilizadores", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntity::USER]),
            new Permission(["code"=>PermissionEnum::PERMISSION_USER_UPDATE, "name"=>"editar utilizador","description" => "permite actualizar os dados um utilizadores", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntity::USER]),
            new Permission(["code"=>PermissionEnum::PERMISSION_USER_DELETE, "name"=>"apagar utilizador","description" => "permite eliminar um utilizadores", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntity::USER]),

            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_VIEW, "name"=>"ver cargos","description" => "permite visualizar os cargos", "group" => PermissionGroupEnum::VIEW, "entity" => PermissionEntity::ROLE]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_STORE, "name"=>"criar cargo","description" => "permite cadastrar um cargo", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntity::ROLE]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_UPDATE, "name"=>"editar cargo","description" => "permite actualizar os dados um cargo", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntity::ROLE]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_DELETE, "name"=>"apagar cargo","description" => "permite eliminar um cargo", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntity::ROLE]),
        ];
    }

}
