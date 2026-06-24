<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            [
                'email' => 'admin@smp9.local',
            ],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );

        User::firstOrCreate(
            [
                'email' => 'guru@smp9.local',
            ],
            [
                'name' => 'Guru Test',
                'password' => Hash::make('password'),
                'role' => 'guru',
                'is_active' => true,
            ]
        );
    }
}