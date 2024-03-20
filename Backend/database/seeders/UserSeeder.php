<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
           [
               'name' => 'san',
               'email' => 'asdasd123123@gmail.com',
               'login' => 'admin',
               'password' => Hash::make('admin'),
               'image' => 'Banner_1.png',
               'role_id' => '1',
           ],
        ]);
    }
}
