<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@krisnanet.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Ahmad Wijaya',
            'email' => 'ahmad@krisnanet.test',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Siti Nurhaliza',
            'email' => 'siti@krisnanet.test',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'is_active' => true,
        ]);
    }
}