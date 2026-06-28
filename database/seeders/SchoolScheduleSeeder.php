<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolSchedule;

class SchoolScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $days = [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
        ];

        foreach ($days as $day) {

            SchoolSchedule::create([

                'day' => $day,

                'check_in_start' => '06:30',

                'late_time' => '07:00',

                'check_out_time' => $day == 'Jumat'
                    ? '11:30'
                    : '14:00',

                'use_default' => true,

                'is_active' => true,

            ]);
        }
    }
}
