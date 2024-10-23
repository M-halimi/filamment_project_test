<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->truncate();
        
        $states = [
            // United States (id: 1) states
            ['name' => 'Alabama', 'country_id' => 1],
            ['name' => 'Alaska', 'country_id' => 1],
            ['name' => 'Arizona', 'country_id' => 1],
            ['name' => 'Arkansas', 'country_id' => 1],
            ['name' => 'California', 'country_id' => 1],
            ['name' => 'Colorado', 'country_id' => 1],
            ['name' => 'Connecticut', 'country_id' => 1],
            ['name' => 'Delaware', 'country_id' => 1],
            ['name' => 'Florida', 'country_id' => 1],
            ['name' => 'Georgia', 'country_id' => 1],
            ['name' => 'Hawaii', 'country_id' => 1],
            ['name' => 'Idaho', 'country_id' => 1],
            ['name' => 'Illinois', 'country_id' => 1],
            ['name' => 'Indiana', 'country_id' => 1],
            ['name' => 'Iowa', 'country_id' => 1],
            ['name' => 'Kansas', 'country_id' => 1],
            ['name' => 'Kentucky', 'country_id' => 1],
            ['name' => 'Louisiana', 'country_id' => 1],
            ['name' => 'Maine', 'country_id' => 1],
            ['name' => 'Maryland', 'country_id' => 1],
            ['name' => 'Massachusetts', 'country_id' => 1],
            ['name' => 'Michigan', 'country_id' => 1],
            ['name' => 'Minnesota', 'country_id' => 1],
            ['name' => 'Mississippi', 'country_id' => 1],
            ['name' => 'Missouri', 'country_id' => 1],
            ['name' => 'Montana', 'country_id' => 1],
            ['name' => 'Nebraska', 'country_id' => 1],
            ['name' => 'Nevada', 'country_id' => 1],
            ['name' => 'New Hampshire', 'country_id' => 1],
            ['name' => 'New Jersey', 'country_id' => 1],
            ['name' => 'New Mexico', 'country_id' => 1],
            ['name' => 'New York', 'country_id' => 1],
            ['name' => 'North Carolina', 'country_id' => 1],
            ['name' => 'North Dakota', 'country_id' => 1],
            ['name' => 'Ohio', 'country_id' => 1],
            ['name' => 'Oklahoma', 'country_id' => 1],
            ['name' => 'Oregon', 'country_id' => 1],
            ['name' => 'Pennsylvania', 'country_id' => 1],
            ['name' => 'Rhode Island', 'country_id' => 1],
            ['name' => 'South Carolina', 'country_id' => 1],
            ['name' => 'South Dakota', 'country_id' => 1],
            ['name' => 'Tennessee', 'country_id' => 1],
            ['name' => 'Texas', 'country_id' => 1],
            ['name' => 'Utah', 'country_id' => 1],
            ['name' => 'Vermont', 'country_id' => 1],
            ['name' => 'Virginia', 'country_id' => 1],
            ['name' => 'Washington', 'country_id' => 1],
            ['name' => 'West Virginia', 'country_id' => 1],
            ['name' => 'Wisconsin', 'country_id' => 1],
            ['name' => 'Wyoming', 'country_id' => 1],

            // United Kingdom (id: 2) states
            ['name' => 'England', 'country_id' => 2],
            ['name' => 'Scotland', 'country_id' => 2],
            ['name' => 'Wales', 'country_id' => 2],
            ['name' => 'Northern Ireland', 'country_id' => 2],
            
            // France (id: 3) regions
            ['name' => 'Auvergne-Rhône-Alpes', 'country_id' => 3],
            ['name' => 'Bourgogne-Franche-Comté', 'country_id' => 3],
            ['name' => 'Bretagne', 'country_id' => 3],
            ['name' => 'Centre-Val de Loire', 'country_id' => 3],
            ['name' => 'Corse', 'country_id' => 3],
            ['name' => 'Grand Est', 'country_id' => 3],
            ['name' => 'Hauts-de-France', 'country_id' => 3],
            ['name' => 'Île-de-France', 'country_id' => 3],
            ['name' => 'Normandie', 'country_id' => 3],
            ['name' => 'Nouvelle-Aquitaine', 'country_id' => 3],
            ['name' => 'Occitanie', 'country_id' => 3],
            ['name' => "Pays de la Loire", 'country_id' => 3],
            ['name' => "Provence-Alpes-Côte d'Azur", 'country_id' => 3],
            
            // Australia (id: 4) states and territories
            ['name' => 'New South Wales', 'country_id' => 4],
            ['name' => 'Victoria', 'country_id' => 4],
            ['name' => 'Queensland', 'country_id' => 4],
            ['name' => 'Western Australia', 'country_id' => 4],
            ['name' => 'South Australia', 'country_id' => 4],
            ['name' => 'Tasmania', 'country_id' => 4],
            ['name' => 'Northern Territory', 'country_id' => 4],
            ['name' => 'Australian Capital Territory', 'country_id' => 4],
            
            // India (id: 5) states
            ['name' => 'Andhra Pradesh', 'country_id' => 5],
            ['name' => 'Arunachal Pradesh', 'country_id' => 5],
            ['name' => 'Assam', 'country_id' => 5],
            ['name' => 'Bihar', 'country_id' => 5],
            ['name' => 'Chhattisgarh', 'country_id' => 5],
            ['name' => 'Goa', 'country_id' => 5],
            ['name' => 'Gujarat', 'country_id' => 5],
            ['name' => 'Haryana', 'country_id' => 5],
            ['name' => 'Himachal Pradesh', 'country_id' => 5],
            ['name' => 'Jharkhand', 'country_id' => 5],
            ['name' => 'Karnataka', 'country_id' => 5],
            ['name' => 'Kerala', 'country_id' => 5],
            ['name' => 'Madhya Pradesh', 'country_id' => 5],
            ['name' => 'Maharashtra', 'country_id' => 5],
            ['name' => 'Manipur', 'country_id' => 5],
            ['name' => 'Meghalaya', 'country_id' => 5],
            ['name' => 'Mizoram', 'country_id' => 5],
            ['name' => 'Nagaland', 'country_id' => 5],
            ['name' => 'Odisha', 'country_id' => 5],
            ['name' => 'Punjab', 'country_id' => 5],
            ['name' => 'Rajasthan', 'country_id' => 5],
            ['name' => 'Sikkim', 'country_id' => 5],
            ['name' => 'Tamil Nadu', 'country_id' => 5],
            ['name' => 'Telangana', 'country_id' => 5],
            ['name' => 'Tripura', 'country_id' => 5],
            ['name' => 'Uttar Pradesh', 'country_id' => 5],
            ['name' => 'Uttarakhand', 'country_id' => 5],
            ['name' => 'West Bengal', 'country_id' => 5],

            // Germany (id: 6) states
            ['name' => 'Baden-Württemberg', 'country_id' => 6],
            ['name' => 'Bavaria', 'country_id' => 6],
            ['name' => 'Berlin', 'country_id' => 6],
            ['name' => 'Brandenburg', 'country_id' => 6],
            ['name' => 'Bremen', 'country_id' => 6],
            ['name' => 'Hamburg', 'country_id' => 6],
            ['name' => 'Hesse', 'country_id' => 6],
            ['name' => 'Lower Saxony', 'country_id' => 6],
            ['name' => 'Mecklenburg-Vorpommern', 'country_id' => 6],
            ['name' => 'North Rhine-Westphalia', 'country_id' => 6],
            ['name' => 'Rhineland-Palatinate', 'country_id' => 6],
            ['name' => 'Saarland', 'country_id' => 6],
            ['name' => 'Saxony', 'country_id' => 6],
            ['name' => 'Saxony-Anhalt', 'country_id' => 6],
            ['name' => 'Schleswig-Holstein', 'country_id' => 6],
            ['name' => 'Thuringia', 'country_id' => 6],

            // Canada (id: 7) provinces and territories
            ['name' => 'Alberta', 'country_id' => 7],
            ['name' => 'British Columbia', 'country_id' => 7],
            ['name' => 'Manitoba', 'country_id' => 7],
            ['name' => 'New Brunswick', 'country_id' => 7],
            ['name' => 'Newfoundland and Labrador', 'country_id' => 7],
            ['name' => 'Northwest Territories', 'country_id' => 7],
            ['name' => 'Nova Scotia', 'country_id' => 7],
            ['name' => 'Nunavut', 'country_id' => 7],
            ['name' => 'Ontario', 'country_id' => 7],
            ['name' => 'Prince Edward Island', 'country_id' => 7],
            ['name' => 'Quebec', 'country_id' => 7],
            ['name' => 'Saskatchewan', 'country_id' => 7],
            ['name' => 'Yukon', 'country_id' => 7],

            // Albania (id: 8) states (keeping your existing Albanian states)
            ['name' => 'Berat', 'country_id' => 8],
            ['name' => 'Bulqize', 'country_id' => 8],
            ['name' => 'Delvine', 'country_id' => 8],
            ['name' => 'Devoll', 'country_id' => 8],
            ['name' => 'Dibre', 'country_id' => 8],
            ['name' => 'Durres', 'country_id' => 8],
            ['name' => 'Elbasan', 'country_id' => 8],
            ['name' => 'Fier', 'country_id' => 8],
            ['name' => 'Gjirokaster', 'country_id' => 8],
            ['name' => 'Gramsh', 'country_id' => 8],
            ['name' => 'Has', 'country_id' => 8],
            ['name' => 'Kavaje', 'country_id' => 8],
            ['name' => 'Kolonje', 'country_id' => 8],
            ['name' => 'Korce', 'country_id' => 8],
            ['name' => 'Kruje', 'country_id' => 8],
            ['name' => 'Kucove', 'country_id' => 8],
            ['name' => 'Kukes', 'country_id' => 8],
            ['name' => 'Kurbin', 'country_id' => 8],
            ['name' => 'Lezhe', 'country_id' => 8],
            ['name' => 'Librazhd', 'country_id' => 8],
            ['name' => 'Lushnje', 'country_id' => 8],
            ['name' => 'Mallakaster', 'country_id' => 8],
            ['name' => 'Malsi e Madhe', 'country_id' => 8],
            ['name' => 'Mat', 'country_id' => 8],
            ['name' => 'Mirdite', 'country_id' => 8],
            ['name' => 'Peqin', 'country_id' => 8],
            ['name' => 'Permet', 'country_id' => 8],
            ['name' => 'Pogradec', 'country_id' => 8],
            ['name' => 'Puke', 'country_id' => 8],
            ['name' => 'Sarande', 'country_id' => 8],
            ['name' => 'Shkoder', 'country_id' => 8],
			['name' => 'City of Johannesburg', 'country_id' => 9],
            ['name' => 'City of Cape Town', 'country_id' => 9],
            ['name' => 'eThekwini', 'country_id' => 9],
            ['name' => 'City of Tshwane', 'country_id' => 9],
            ['name' => 'Ekurhuleni', 'country_id' => 9],
            ['name' => 'Nelson Mandela Bay', 'country_id' => 9],
            ['name' => 'Buffalo City', 'country_id' => 9],
            ['name' => 'Mangaung', 'country_id' => 9],
            ['name' => 'Msunduzi', 'country_id' => 9],
            ['name' => 'Emfuleni', 'country_id' => 9],
            ['name' => 'City of Johannesburg', 'country_id' => 9],
            ['name' => 'City of Cape Town', 'country_id' => 9],
            ['name' => 'eThekwini', 'country_id' => 9],
            ['name' => 'City of Tshwane', 'country_id' => 9],
            ['name' => 'Ekurhuleni', 'country_id' => 9],
            ['name' => 'Nelson Mandela Bay', 'country_id' => 9],
            ['name' => 'Buffalo City', 'country_id' => 9],
            ['name' => 'Mangaung', 'country_id' => 9],
            ['name' => 'Msunduzi', 'country_id' => 9],
            ['name' => 'Emfuleni', 'country_id' => 9],

            // Additional Mexican (id: 10) Major Municipalities
            ['name' => 'Ciudad de México', 'country_id' => 10],
            ['name' => 'Guadalajara', 'country_id' => 10],
            ['name' => 'Monterrey', 'country_id' => 10],
            ['name' => 'Puebla', 'country_id' => 10],
            ['name' => 'Tijuana', 'country_id' => 10],
            ['name' => 'León', 'country_id' => 10],
            ['name' => 'Juárez', 'country_id' => 10],
            ['name' => 'Zapopan', 'country_id' => 10],
            ['name' => 'Mérida', 'country_id' => 10],
            ['name' => 'San Luis Potosí', 'country_id' => 10],
		];
			foreach (array_chunk($states, 100) as $chunk) {
				DB::table('states')->insert($chunk);
			}
    }
}