<?php
namespace App\Services;

use App\Models\Role;

class RoleService{

    public function saveOrUpdateByCode(Role $role){
        $data = $role->getAttributes();
        Role::updateOrCreate(['code' => $data['code']],$data);
    }

    public function findByCode(string $code){
        return Role::where('code',$code)->first();
    }

}
