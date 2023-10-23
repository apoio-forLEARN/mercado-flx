<?php
namespace App\Services;

use App\Models\Role;

class RoleService{

    public function saveOrUpdateByCode(Role $role){
        $data = $role->getAttributes();
        Role::updateOrCreate([ Role::CODE => $data[Role::CODE] ],$data);
    }

    public function findByCode(string $code){
        return Role::where(Role::CODE,$code)->first();
    }

    public function findAll(){
        return Role::paginate();
    }

}
