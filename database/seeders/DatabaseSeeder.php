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
        // Call other seeders
        $this->call([
            CategoriesSeeder::class,
            RoleSeeder::class,
        ]);

        // Create a test admin user and assign admin role
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ])->assignRole('admin');

        // Create a test normal user and assign user role
        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'user@test.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');
    }
}
