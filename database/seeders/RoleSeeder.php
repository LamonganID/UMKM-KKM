<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles to be created
        $roles = [
            ['name' => 'admin'],
            ['name' => 'user'],
        ];

        // Create roles if they do not exist
        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }
    }
}
