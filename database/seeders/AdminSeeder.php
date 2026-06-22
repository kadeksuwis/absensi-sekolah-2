<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            [
                'email' => 'admin@smp9.local',
            ],
            [
                'name' => 'Administrator',
                'password' => 'password',
                'role' => 'admin',
                'is_active' => true,
            ]
        );
    }
}