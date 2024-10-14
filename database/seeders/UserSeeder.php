<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::created(['name' => 'admin']);
        $editorRole = Role::created(['name' => 'editor']);
        $userRole = Role::created(['name' => 'user']);

        
    }
}