<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolSetting;

class SchoolSettingSeeder extends Seeder
{
    public function run(): void
    {
        SchoolSetting::create([

            'default_check_in_start' => '06:30',

            'default_late_time' => '07:00',

            'default_check_out_time' => '14:00',

        ]);
    }
}