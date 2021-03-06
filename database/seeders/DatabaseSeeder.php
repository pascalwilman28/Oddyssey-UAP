<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategoriesSeeder::class,
            GamesSeeder::class,
            UserSeeder::class,
            CartSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
