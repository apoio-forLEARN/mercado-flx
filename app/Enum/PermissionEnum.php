<?php

namespace App\Enum;

use App\Enum\PermissionEntityEnum;
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

    public const PERMISSION_CATEGORY_PRODUCT_VIEW = "PERMISSION_CATEGORY_PRODUCT_VIEW";
    public const PERMISSION_CATEGORY_PRODUCT_STORE = "PERMISSION_CATEGORY_PRODUCT_STORE";
    public const PERMISSION_CATEGORY_PRODUCT_UPDATE = "PERMISSION_CATEGORY_PRODUCT_UPDATE";
    public const PERMISSION_CATEGORY_PRODUCT_DELETE = "PERMISSION_CATEGORY_PRODUCT_DELETE";

    public const PERMISSION_PRODUCT_VIEW = "PERMISSION_PRODUCT_VIEW";
    public const PERMISSION_PRODUCT_STORE = "PERMISSION_PRODUCT_STORE";
    public const PERMISSION_PRODUCT_UPDATE = "PERMISSION_PRODUCT_UPDATE";
    public const PERMISSION_PRODUCT_DELETE = "PERMISSION_PRODUCT_DELETE";

    public static function values(){
        return [

            new Permission(["code"=>PermissionEnum::PERMISSION_SUPER, "name"=>"permissão super utilizador","description" => "permite o acesso total para os super usuários", "group" => PermissionGroupEnum::SPECIAL]),
            new Permission(["code"=>PermissionEnum::PERMISSION_DEV, "name"=>"permissão desenvolvedor","description" => "permite o acesso total para os desenvolvedores", "group" => PermissionGroupEnum::SPECIAL]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ADMIN, "name"=>"criar permissão","description" => "permite o acesso total para administradores", "group" => PermissionGroupEnum::SPECIAL]),

            new Permission(["code"=>PermissionEnum::PERMISSION_VIEW, "name"=>"ver permissão","description" => "permite visualizar as permissões", "group" => PermissionGroupEnum::VIEW, "entity" =>PermissionEntityEnum::PERMISSION]),
            new Permission(["code"=>PermissionEnum::PERMISSION_STORE, "name"=>"criar permissão","description" => "permite cadastrar uma permissão", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntityEnum::PERMISSION]),
            new Permission(["code"=>PermissionEnum::PERMISSION_UPDATE, "name"=>"editar permissão","description" => "permite actualizar os dados uma permissão", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntityEnum::PERMISSION]),
            new Permission(["code"=>PermissionEnum::PERMISSION_DELETE, "name"=>"apagar permissão","description" => "permite eliminar uma permissão", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntityEnum::PERMISSION]),

            new Permission(["code"=>PermissionEnum::PERMISSION_USER_VIEW, "name"=>"ver utilizador","description" => "permite visualizar os utilizadores", "group" => PermissionGroupEnum::VIEW, "entity" => PermissionEntityEnum::USER]),
            new Permission(["code"=>PermissionEnum::PERMISSION_USER_STORE, "name"=>"criar utilizador","description" => "permite cadastrar um utilizadores", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntityEnum::USER]),
            new Permission(["code"=>PermissionEnum::PERMISSION_USER_UPDATE, "name"=>"editar utilizador","description" => "permite actualizar os dados um utilizadores", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntityEnum::USER]),
            new Permission(["code"=>PermissionEnum::PERMISSION_USER_DELETE, "name"=>"apagar utilizador","description" => "permite eliminar um utilizadores", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntityEnum::USER]),

            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_VIEW, "name"=>"ver cargos","description" => "permite visualizar os cargos", "group" => PermissionGroupEnum::VIEW, "entity" => PermissionEntityEnum::ROLE]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_STORE, "name"=>"criar cargo","description" => "permite cadastrar um cargo", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntityEnum::ROLE]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_UPDATE, "name"=>"editar cargo","description" => "permite actualizar os dados um cargo", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntityEnum::ROLE]),
            new Permission(["code"=>PermissionEnum::PERMISSION_ROLE_DELETE, "name"=>"apagar cargo","description" => "permite eliminar um cargo", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntityEnum::ROLE]),

            new Permission(["code"=>PermissionEnum::PERMISSION_CATEGORY_PRODUCT_VIEW, "name"=>"ver categoria de cargos","description" => "permite visualizar as categoria de cargos", "group" => PermissionGroupEnum::VIEW, "entity" => PermissionEntityEnum::CATEGORY_PRODUCT]),
            new Permission(["code"=>PermissionEnum::PERMISSION_CATEGORY_PRODUCT_STORE, "name"=>"criar categoria de cargo","description" => "permite cadastrar uma categoria de cargo", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntityEnum::CATEGORY_PRODUCT]),
            new Permission(["code"=>PermissionEnum::PERMISSION_CATEGORY_PRODUCT_UPDATE, "name"=>"editar categoria de cargo","description" => "permite actualizar os dados uma categoria de cargo", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntityEnum::CATEGORY_PRODUCT]),
            new Permission(["code"=>PermissionEnum::PERMISSION_CATEGORY_PRODUCT_DELETE, "name"=>"apagar categoria de cargo","description" => "permite eliminar uma categoria de cargo", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntityEnum::CATEGORY_PRODUCT]),

            new Permission(["code"=>PermissionEnum::PERMISSION_PRODUCT_VIEW, "name"=>"ver produto","description" => "permite visualizar os produtos", "group" => PermissionGroupEnum::VIEW, "entity" => PermissionEntityEnum::PRODUCT]),
            new Permission(["code"=>PermissionEnum::PERMISSION_PRODUCT_STORE, "name"=>"criar produto","description" => "permite cadastrar um produto", "group" => PermissionGroupEnum::STORE, "entity" => PermissionEntityEnum::PRODUCT]),
            new Permission(["code"=>PermissionEnum::PERMISSION_PRODUCT_UPDATE, "name"=>"editar produto","description" => "permite actualizar os produto", "group" => PermissionGroupEnum::UPDATE, "entity" => PermissionEntityEnum::PRODUCT]),
            new Permission(["code"=>PermissionEnum::PERMISSION_PRODUCT_DELETE, "name"=>"apagar produto","description" => "permite eliminar um produto", "group" => PermissionGroupEnum::DELETE, "entity" => PermissionEntityEnum::PRODUCT]),

        ];

    }

}
