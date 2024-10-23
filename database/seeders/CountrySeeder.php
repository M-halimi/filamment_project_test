<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->delete();
        
        $countries = [
            ['id' => 1, 'name' => 'United States'],
            ['id' => 2, 'name' => 'United Kingdom'],
            ['id' => 3, 'name' => 'France'],
            ['id' => 4, 'name' => 'Australia'],
            ['id' => 5, 'name' => 'India'],
            ['id' => 6, 'name' => 'Germany'],
            ['id' => 7, 'name' => 'Canada'],
            ['id' => 8, 'name' => 'Albania'],
            ['id' => 9, 'name' => 'South Africa'],
            ['id' => 10, 'name' => 'Mexico']
        ];
        
        DB::table('countries')->insert($countries);
    }
}
