<?php

namespace App\Services;

use App\Models\PermissionRole;

class PermissionRoleService{

    private $roleService;
    private $permissionService;

    function __construct(){
        $this->roleService = new RoleService();
        $this->permissionService = new PermissionService();
    }

    public function saveOrUpdate($permissionEnum, $roleEnum){
        $role = $this->roleService->findByCode($roleEnum);
        $permission = $this->permissionService->findByCode($permissionEnum);
        if(isset($role->id,$permission->id)){
            $data = [ "role_id" => $role->id, "permission_id" => $permission->id];
            PermissionRole::updateOrCreate($data, $data);
        }
    }


}
