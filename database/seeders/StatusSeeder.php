<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::factory()->create([
            'name' => 'co pending',
            'slug' => 'co_pending',
        ]);
        Status::factory()->create([
            'name' => 'dc pending',
            'slug' => 'dc_pending',
        ]);
        Status::factory()->create([
            'name' => 'decision made',
            'slug' => 'decision_made',
        ]);
        Status::factory()->create([
            'name' => 'co rejected',
            'slug' => 'co_rejected',
        ]);
        Status::factory()->create([
            'name' => 'dc rejected',
            'slug' => 'dc_rejected',
        ]);
    }
}
