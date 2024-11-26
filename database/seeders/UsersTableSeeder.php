<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('1234admin'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //Personnel
            [
                'name' => 'Carpenter',
                'username' => 'carp',
                'email' => 'carp@gmail.com',
                'password' => Hash::make('user1234'),
                'role' => 'personnel',
                'status' => 'active',
            ],

            //User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user1234'),
                'role' => 'user',
                'status' => 'active',
            ]
        ]);
    }
}
