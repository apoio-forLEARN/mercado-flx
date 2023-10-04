<?php

namespace App\Enum;

class PermissionRoleEnum{

    private static function create($permission, $role){
        return (object)["permission"=>$permission, "role"=>$role];
    }

    public static function values(){
        return [
            PermissionRoleEnum::create(PermissionEnum::PERMISSION_ADMIN, RoleEnum::ROLE_ADMIN),
            PermissionRoleEnum::create(PermissionEnum::PERMISSION_SUPER, RoleEnum::ROLE_SUPER),
            PermissionRoleEnum::create(PermissionEnum::PERMISSION_DEV, RoleEnum::ROLE_DEV),

            PermissionRoleEnum::create(PermissionEnum::PERMISSION_VIEW, RoleEnum::ROLE_EMPLOYEE),
            PermissionRoleEnum::create(PermissionEnum::PERMISSION_STORE, RoleEnum::ROLE_EMPLOYEE),
            PermissionRoleEnum::create(PermissionEnum::PERMISSION_UPDATE, RoleEnum::ROLE_EMPLOYEE),
            PermissionRoleEnum::create(PermissionEnum::PERMISSION_DELETE, RoleEnum::ROLE_EMPLOYEE),
        ];
    }

}
