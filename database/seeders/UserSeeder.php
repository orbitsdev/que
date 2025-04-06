<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Super Admin
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@qmaster.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
            'can_manage_all_branches' => true,
        ]);

        // Create Branch Admin
        User::create([
            'name' => 'Branch Admin',
            'email' => 'admin@qmaster.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'can_manage_all_branches' => false,
        ]);

        // Create Staff
        User::create([
            'name' => 'Staff User',
            'email' => 'staff@qmaster.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
            'can_manage_all_branches' => false,
        ]);
    }
}
