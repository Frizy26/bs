<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
           [
               'nick' => 'san',
               'email' => 'asdasd123123@gmail.com',
               'login' => 'admin',
               'password' => 'admin',
               'image' => 'Banner_1.png',
               'role_id' => '1',
           ],
        ]);
    }
}
