<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Irina Slinyuk',
            'email' => 'irinaslinyuk@gmail.com',
            'password' => bcrypt('asdasd123'),
            'is_admin' => true,
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => bcrypt('asdasd123'),
            'is_admin' => false,
        ]);
    }
}
