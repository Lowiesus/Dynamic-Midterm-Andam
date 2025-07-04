<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['role_name' => 'Admin', 'description' => 'System administrator'],
            ['role_name' => 'Teacher', 'description' => 'Handles classes and courses'],
            ['role_name' => 'Student', 'description' => 'Enrolled in courses'],
            ]);
    }
}
