<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
           [
               'name' => 'Админ',
               'code' => 'Admin',
           ],
            [
                'name' => 'Пользователь',
                'code' => 'User',
            ],
        ]);
    }
}
