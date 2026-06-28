<?php

namespace App\Http\Controllers;

use App\Models\SchoolSchedule;
use Illuminate\Http\Request;

class SchoolScheduleController extends Controller
{
    /**
     * Menampilkan seluruh jadwal sekolah.
     */
    public function index()
    {
        $schedules = SchoolSchedule::orderByRaw("
            FIELD(
                day,
                'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu'
            )
        ")->get();

        return view(
            'school-schedules.index',
            compact('schedules')
        );
    }

    /**
     * Form edit jadwal.
     */
    public function edit(int $id)
    {
        $schedule = SchoolSchedule::findOrFail($id);

        return view(
            'school-schedules.edit',
            compact('schedule')
        );
    }

    /**
     * Update jadwal sekolah.
     */
    public function update(Request $request, int $id)
    {
        $schedule = SchoolSchedule::findOrFail($id);

        $request->validate([
            'check_in_start' => 'required|date_format:H:i',
            'late_time'      => 'required|date_format:H:i|after:check_in_start',
            'check_out_time' => 'required|date_format:H:i|after:late_time',
        ]);

        $schedule->update([

            'use_default'     => $request->has('use_default'),

            'check_in_start'  => $request->check_in_start,

            'late_time'       => $request->late_time,

            'check_out_time'  => $request->check_out_time,

            'is_active'       => $request->has('is_active'),

        ]);

        return redirect()
            ->route('school-schedules.index')
            ->with(
                'success',
                'Jadwal ' . $schedule->day . ' berhasil diperbarui.'
            );
    }
}
