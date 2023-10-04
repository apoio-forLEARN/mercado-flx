<?php

namespace Database\Seeders;

use App\Enum\PermissionRoleEnum;
use App\Services\PermissionRoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class permissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionRole = PermissionRoleEnum::values();
        $permissionRoleService = new PermissionRoleService();
        foreach($permissionRole as $permissionRole){
            if(isset($permissionRole->permission, $permissionRole->role)){
                $permissionRoleService->saveOrUpdate($permissionRole->permission, $permissionRole->role);
            }
        }
    }
}
