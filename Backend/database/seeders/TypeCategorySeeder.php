<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('type_categories')->insert([
           [
               'name' => 'Новые',
           ],
        ]);
    }
}
