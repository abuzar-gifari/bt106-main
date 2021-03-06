<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::factory(12)->create();
        // \App\Models\User::factory(10)->create();
        //$this->call(UserSeeder::class);
    }
}
// php artisan migrate:fresh --seed
// * DELETE ALL DATA IN THE TABLE
// * RUN "DatabaseSeeder.php" FILE
