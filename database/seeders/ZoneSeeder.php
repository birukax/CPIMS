<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zone::factory()->create([
            'name' => 'cafe',
            'slug' => 'cafe',
            'status' => 1,
        ]);
        Zone::factory()->create([
            'name' => 'main entrance',
            'slug' => 'main_entrance',
            'status' => 1,
        ]);
        Zone::factory()->create([
            'name' => 'cs department',
            'slug' => 'cs_department',
            'status' => 1,
        ]);
        Zone::factory()->create([
            'name' => 'round',
            'slug' => 'round',
            'status' => 1,
        ]);
        Zone::factory()->create([
            'name' => 'stadium',
            'slug' => 'stadium',
            'status' => 1,
        ]);
    }
}
