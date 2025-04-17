<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
                // 'is_seeded' => true
            ]
        );

        User::firstOrCreate(
            ['email' => 'petugas@gmail.com'],
            [
                'name' => 'petugas',
                'password' => bcrypt('password'),
                'role' => 'employee',
                // 'is_seeded' => true
            ]
        );
    }
}
