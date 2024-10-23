<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks
        Schema::disableForeignKeyConstraints();

        // Clear tables in correct order
        DB::table('cities')->truncate();
        DB::table('states')->truncate();
        DB::table('countries')->truncate();

        // Run seeders
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
        ]);

        // Re-enable foreign key checks
        Schema::enableForeignKeyConstraints();
    }
}