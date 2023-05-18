<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'name' => 'Police',
            'slug' => 'police',
        ]);
        Role::factory()->create([
            'name' => 'Shift Leader',
            'slug' => 'shift_leader',
        ]);
        Role::factory()->create([
            'name' => 'Chief Officer',
            'slug' => 'chief_officer'
        ]);
        Role::factory()->create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
        Role::factory()->create([
            'name' => 'Discipline Committee',
            'slug' => 'discipline_committee',
        ]);
    }
}
