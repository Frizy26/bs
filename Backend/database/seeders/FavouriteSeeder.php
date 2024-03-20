<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavouriteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('favourites')->insert([
           [
                'user_id' => '1',
           ],
        ]);
    }
}
