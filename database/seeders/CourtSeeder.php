<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{

    public function run(): void
{
    // 1. Badminton Courts (1-5)
    for ($i = 1; $i <= 5; $i++) {
        \App\Models\Court::create([
            'name' => "Badminton Court $i",
            'sport_type' => 'Badminton',
            'price_per_hour' => 25.00
        ]);
    }

    // 2. Futsal Arenas (A, B, C)
    foreach (['A', 'B', 'C'] as $letter) {
        \App\Models\Court::create([
            'name' => "Futsal Arena $letter",
            'sport_type' => 'Futsal',
            'price_per_hour' => 80.00
        ]);
    }

    // 3. Volleyball Courts (A, B)
    foreach (['A', 'B'] as $letter) {
        \App\Models\Court::create([
            'name' => "Volleyball Court $letter",
            'sport_type' => 'Volleyball',
            'price_per_hour' => 40.00 // Adjust price as needed
        ]);
    }
}
}
