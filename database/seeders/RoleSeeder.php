<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use App\Services\RoleService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = RoleEnum::values();
        $roleService = new RoleService();
        foreach($roles as $role)
           $roleService->saveOrUpdateByCode($role);
    }

}
