<?php

namespace Database\Seeders;

use App\Enum\UserEnum;
use App\Services\UserService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = UserEnum::values();
        $userService = new UserService();
        foreach($users as $user)
           $userService->saveOrUpdateByEmail($user);

    }
}
