<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
           [
               'value' => '4',
           ],
        ]);
    }
}
