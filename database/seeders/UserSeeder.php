<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Biruk Alemayehu',
            'email' => 'ba@email.com',
            'role' => 'admin',
            'phone' => '0911223344',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        User::factory()->create([
            'name' => 'Jack Grealish',
            'email' => 'jg@email.com',
            'role' => 'shift_leader',
            'phone' => '0911112222',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        User::factory()->create([
            'name' => 'John Stones',
            'email' => 'js@email.com',
            'role' => 'police',
            'phone' => '0922223333',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        User::factory()->create([
            'name' => 'Sergio Gomez',
            'email' => 'sg@email.com',
            'role' => 'police',
            'phone' => '0933334444',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        User::factory()->create([
            'name' => 'Ruben Dias',
            'email' => 'rd@email.com',
            'role' => 'police',
            'phone' => '0944445555',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::factory()->create([
            'name' => 'Lauren Hemp',
            'email' => 'lh@email.com',
            'role' => 'police',
            'phone' => '0955556666',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
