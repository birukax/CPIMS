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
            'name' => 'admin',
            'email' => 'admin@email.com',
            'phone' => '0911223344',
            'role_id' => '4',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
        User::factory()->create([
            'name' => 'Biruk Alemayehu',
            'email' => 'ba@email.com',
            'phone' => '0911223344',
            'role_id' => '3',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
        User::factory()->create([
            'name' => 'Jack Grealish',
            'email' => 'jg@email.com',
            'phone' => '0911112222',
            'role_id' => '2',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
        User::factory()->create([
            'name' => 'John Stones',
            'email' => 'js@email.com',
            'role_id' => '1',
            'phone' => '0922223333',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
        User::factory()->create([
            'name' => 'Sergio Gomez',
            'email' => 'sg@email.com',
            'role_id' => '1',
            'phone' => '0933334444',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
        User::factory()->create([
            'name' => 'Ruben Dias',
            'email' => 'rd@email.com',
            'role_id' => '1',
            'phone' => '0944445555',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);

        User::factory()->create([
            'name' => 'Lauren Hemp',
            'email' => 'lh@email.com',
            'role_id' => '1',
            'phone' => '0955556666',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
    }
}
