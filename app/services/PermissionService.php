<?php
namespace App\Services;

use App\Models\Permission;

class PermissionService{

    public function saveOrUpdateByCode(Permission $permission){
        $data = $permission->getAttributes();
        Permission::updateOrCreate(['code' => $data['code']],$data);
    }

    public function findByCode(string $code){
        return Permission::where('code',$code)->first();
    }

}
