<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\Court::create(['name' => 'Badminton Court 1', 'sport_type' => 'Badminton', 'price_per_hour' => 25.00]);
        \App\Models\Court::create(['name' => 'Badminton Court 2', 'sport_type' => 'Badminton', 'price_per_hour' => 25.00]);
        \App\Models\Court::create(['name' => 'Futsal Arena A', 'sport_type' => 'Futsal', 'price_per_hour' => 80.00]);
    }
}
