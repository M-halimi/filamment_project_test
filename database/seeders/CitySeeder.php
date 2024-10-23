<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('cities')->truncate();
    
    $cities = [
        // More US cities
        // Alabama (state_id: 1)
        ['name' => 'Birmingham', 'state_id' => 1],
        ['name' => 'Mobile', 'state_id' => 1],
        ['name' => 'Montgomery', 'state_id' => 1],
        ['name' => 'Huntsville', 'state_id' => 1],
        ['name' => 'Tuscaloosa', 'state_id' => 1],
        
        // Alaska (state_id: 2)
        ['name' => 'Anchorage', 'state_id' => 2],
        ['name' => 'Fairbanks', 'state_id' => 2],
        ['name' => 'Juneau', 'state_id' => 2],
        ['name' => 'Sitka', 'state_id' => 2],
        ['name' => 'Wasilla', 'state_id' => 2],
        
        // California (state_id: 5)
        ['name' => 'Los Angeles', 'state_id' => 5],
        ['name' => 'San Francisco', 'state_id' => 5],
        ['name' => 'San Diego', 'state_id' => 5],
        ['name' => 'Sacramento', 'state_id' => 5],
        ['name' => 'San Jose', 'state_id' => 5],
        ['name' => 'Oakland', 'state_id' => 5],
        ['name' => 'Long Beach', 'state_id' => 5],
        
        // New York (state_id: 32)
        ['name' => 'New York City', 'state_id' => 32],
        ['name' => 'Buffalo', 'state_id' => 32],
        ['name' => 'Rochester', 'state_id' => 32],
        ['name' => 'Syracuse', 'state_id' => 32],
        ['name' => 'Albany', 'state_id' => 32],
        
        // Texas (state_id: 43)
        ['name' => 'Houston', 'state_id' => 43],
        ['name' => 'Dallas', 'state_id' => 43],
        ['name' => 'Austin', 'state_id' => 43],
        ['name' => 'San Antonio', 'state_id' => 43],
        ['name' => 'Fort Worth', 'state_id' => 43],
        
        // UK Cities
        // England (state_id: 51)
        ['name' => 'London', 'state_id' => 51],
        ['name' => 'Manchester', 'state_id' => 51],
        ['name' => 'Birmingham', 'state_id' => 51],
        ['name' => 'Liverpool', 'state_id' => 51],
        ['name' => 'Leeds', 'state_id' => 51],
        ['name' => 'Newcastle', 'state_id' => 51],
        ['name' => 'Bristol', 'state_id' => 51],
        ['name' => 'Sheffield', 'state_id' => 51],
        ['name' => 'Nottingham', 'state_id' => 51],
        
        // Scotland (state_id: 52)
        ['name' => 'Edinburgh', 'state_id' => 52],
        ['name' => 'Glasgow', 'state_id' => 52],
        ['name' => 'Aberdeen', 'state_id' => 52],
        ['name' => 'Dundee', 'state_id' => 52],
        ['name' => 'Inverness', 'state_id' => 52],
        
        // French Cities
        // Île-de-France (state_id: 62)
        ['name' => 'Paris', 'state_id' => 62],
        ['name' => 'Versailles', 'state_id' => 62],
        ['name' => 'Saint-Denis', 'state_id' => 62],
        ['name' => 'Boulogne-Billancourt', 'state_id' => 62],
        ['name' => 'Argenteuil', 'state_id' => 62],
        
        // Provence-Alpes-Côte d'Azur (state_id: 67)
        ['name' => 'Marseille', 'state_id' => 67],
        ['name' => 'Nice', 'state_id' => 67],
        ['name' => 'Toulon', 'state_id' => 67],
        ['name' => 'Aix-en-Provence', 'state_id' => 67],
        ['name' => 'Cannes', 'state_id' => 67],
        
        // Australian Cities
        // New South Wales (state_id: 68)
        ['name' => 'Sydney', 'state_id' => 68],
        ['name' => 'Newcastle', 'state_id' => 68],
        ['name' => 'Wollongong', 'state_id' => 68],
        ['name' => 'Central Coast', 'state_id' => 68],
        ['name' => 'Canberra', 'state_id' => 68],
        
        // Victoria (state_id: 69)
        ['name' => 'Melbourne', 'state_id' => 69],
        ['name' => 'Geelong', 'state_id' => 69],
        ['name' => 'Ballarat', 'state_id' => 69],
        ['name' => 'Bendigo', 'state_id' => 69],
        ['name' => 'Shepparton', 'state_id' => 69],
        
        // Indian Cities
        // Maharashtra (state_id: 81)
        ['name' => 'Mumbai', 'state_id' => 81],
        ['name' => 'Pune', 'state_id' => 81],
        ['name' => 'Nagpur', 'state_id' => 81],
        ['name' => 'Thane', 'state_id' => 81],
        ['name' => 'Nashik', 'state_id' => 81],
        ['name' => 'Aurangabad', 'state_id' => 81],
        
        // Karnataka (state_id: 78)
        ['name' => 'Bengaluru', 'state_id' => 78],
        ['name' => 'Mysuru', 'state_id' => 78],
        ['name' => 'Hubli', 'state_id' => 78],
        ['name' => 'Mangaluru', 'state_id' => 78],
        ['name' => 'Belagavi', 'state_id' => 78],
        
        // German Cities
        // Berlin (state_id: 98)
        ['name' => 'Berlin', 'state_id' => 98],
        ['name' => 'Spandau', 'state_id' => 98],
        ['name' => 'Charlottenburg', 'state_id' => 98],
        
        // Hamburg (state_id: 100)
        ['name' => 'Hamburg', 'state_id' => 100],
        ['name' => 'Bergedorf', 'state_id' => 100],
        ['name' => 'Altona', 'state_id' => 100],
        
        // Canadian Cities
        // Ontario (state_id: 112)
        ['name' => 'Toronto', 'state_id' => 112],
        ['name' => 'Ottawa', 'state_id' => 112],
        ['name' => 'Hamilton', 'state_id' => 112],
        ['name' => 'Mississauga', 'state_id' => 112],
        ['name' => 'Brampton', 'state_id' => 112],
        ['name' => 'London', 'state_id' => 112],
        ['name' => 'Windsor', 'state_id' => 112],
        
        // Quebec (state_id: 114)
        ['name' => 'Montreal', 'state_id' => 114],
        ['name' => 'Quebec City', 'state_id' => 114],
        ['name' => 'Laval', 'state_id' => 114],
        ['name' => 'Gatineau', 'state_id' => 114],
        ['name' => 'Sherbrooke', 'state_id' => 114],
        ['name' => 'Trois-Rivières', 'state_id' => 114],
        
        // British Columbia (state_id: 106)
        ['name' => 'Vancouver', 'state_id' => 106],
        ['name' => 'Victoria', 'state_id' => 106],
        ['name' => 'Surrey', 'state_id' => 106],
        ['name' => 'Burnaby', 'state_id' => 106],
        ['name' => 'Richmond', 'state_id' => 106],
        
        // South African Cities (country_id: 9)
        ['name' => 'Johannesburg', 'state_id' => 130],
        ['name' => 'Soweto', 'state_id' => 130],
        ['name' => 'Pretoria', 'state_id' => 133],
        ['name' => 'Cape Town', 'state_id' => 131],
        ['name' => 'Durban', 'state_id' => 132],
        
        // Mexican Cities (country_id: 10)
        ['name' => 'Mexico City', 'state_id' => 140],
        ['name' => 'Guadalajara', 'state_id' => 141],
        ['name' => 'Monterrey', 'state_id' => 142],
        ['name' => 'Puebla', 'state_id' => 143],
        ['name' => 'Tijuana', 'state_id' => 144]
    ];
    
    // Insert in chunks to handle large datasets efficiently
    foreach (array_chunk($cities, 100) as $chunk) {
        DB::table('cities')->insert($chunk);
    }
}
}
