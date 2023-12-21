<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Muhammad Rizaldy Alfarez',
            'email' => 'zaldyalfarez@gmail.com',
            'email_verified_at' => '2023-12-07 06:33:55',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Zaldos Lagados',
            'email' => 'heyzaldy@gmail.com',
            'email_verified_at' => '2023-12-07 06:33:55',
            'password' => bcrypt('user'),
            'role' => 'test taker',
        ]);
    }
}
