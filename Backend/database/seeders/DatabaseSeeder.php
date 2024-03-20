<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Favourite;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
            TypeCategorySeeder::class,
            FavouriteSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            FeedbackeSeeder::class,
        ]);
    }
}
