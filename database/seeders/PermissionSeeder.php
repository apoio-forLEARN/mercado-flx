<?php

namespace Database\Seeders;

use App\Enum\PermissionEnum;
use App\Services\PermissionService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = PermissionEnum::values();
        $permissionService = new PermissionService();
        foreach($permissions as $permission)
           $permissionService->saveOrUpdateByCode($permission);
    }
}
