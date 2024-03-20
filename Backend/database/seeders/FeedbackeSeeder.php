<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('feedbackes')->insert([
           [
               'user_id'=>'1',
               'product_id'=>'1',
               'value' => '4',
           ],
        ]);
    }
}
