<?php
namespace App\Services;

use App\Models\Permission;

class PermissionService{

    public function saveOrUpdateByCode(Permission $permission){
        $data = $permission->getAttributes();
        Permission::updateOrCreate([ Permission::CODE => $data[Permission::CODE] ],$data);
    }

    public function findByCode(string $code){
        return Permission::where(Permission::CODE,$code)->first();
    }

    public function findAll(){
        return Permission::paginate();
    }

}
