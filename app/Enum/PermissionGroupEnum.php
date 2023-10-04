<?php

namespace App\Enum;

class PermissionGroupEnum{

    public const VIEW = "VIEW";
    public const STORE = "STORE";
    public const UPDATE = "UPDATE";
    public const DELETE = "DELETE";
    public const NONE = "NONE";
    public const SPECIAL = "SPECIAL";
    public const VALIDATION = "VALIDATION";

    public static function groups(){
        return [
            PermissionGroupEnum::NONE,
            PermissionGroupEnum::STORE,
            PermissionGroupEnum::DELETE,
            PermissionGroupEnum::UPDATE,
            PermissionGroupEnum::VIEW,
            PermissionGroupEnum::SPECIAL,
            PermissionGroupEnum::VALIDATION
        ];
    }

}
