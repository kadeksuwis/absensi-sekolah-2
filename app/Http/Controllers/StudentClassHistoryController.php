<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\StudentClassHistory;
use Illuminate\Http\Request;

class StudentClassHistoryController extends Controller
{
    public function index()
    {
        $classHistories = StudentClassHistory::with([
            'student',
            'academicYear',
            'schoolClass',
        ])
            ->orderByDesc('id')
            ->get();

        return view(
            'student-class-histories.index',
            compact('classHistories')
        );
    }

    public function create()
    {
        $academicYear = AcademicYear::where('is_active', true)->first();

        if (!$academicYear) {

            return redirect()
                ->route('academic-years.index')
                ->with('error', 'Silakan aktifkan Tahun Ajaran terlebih dahulu.');
        }

        $usedStudents = StudentClassHistory::where(
            'academic_year_id',
            $academicYear->id
        )->pluck('student_id');

        $students = Student::whereNotIn('id', $usedStudents)
            ->orderBy('nama')
            ->get();

        $classes = SchoolClass::orderBy('nama_kelas')->get();

        return view(
            'student-class-histories.create',
            compact(
                'students',
                'academicYear',
                'classes'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id'       => 'required|exists:students,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'class_id'         => 'required|exists:school_classes,id',
            'class_number'     => 'required|integer|min:1|max:99',
        ]);

        $exists = StudentClassHistory::where('student_id', $request->student_id)
            ->where('academic_year_id', $request->academic_year_id)
            ->exists();

        if ($exists) {

            return back()
                ->withInput()
                ->withErrors([
                    'student_id' => 'Siswa sudah memiliki riwayat pada Tahun Ajaran ini.',
                ]);
        }

        StudentClassHistory::create([
            'student_id'       => $request->student_id,
            'academic_year_id' => $request->academic_year_id,
            'class_id'         => $request->class_id,
            'class_number'     => $request->class_number,
            'status'           => 'aktif',
        ]);

        return redirect()
            ->route('student-class-histories.index')
            ->with('success', 'Riwayat kelas berhasil ditambahkan.');
    }

    public function edit(int $id)
    {
        $classHistory = StudentClassHistory::findOrFail($id);

        $students = Student::orderBy('nama')->get();

        $academicYears = AcademicYear::orderByDesc('start_year')->get();

        $classes = SchoolClass::orderBy('nama_kelas')->get();

        return view(
            'student-class-histories.edit',
            compact(
                'classHistory',
                'students',
                'academicYears',
                'classes'
            )
        );
    }

    public function update(Request $request, int $id)
    {
        $classHistory = StudentClassHistory::findOrFail($id);

        $request->validate([
            'student_id'       => 'required|exists:students,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'class_id'         => 'required|exists:school_classes,id',
            'class_number'     => 'required|integer|min:1|max:99',
            'status'           => 'required|in:aktif,naik,lulus,pindah,keluar',
        ]);

        $exists = StudentClassHistory::where('student_id', $request->student_id)
            ->where('academic_year_id', $request->academic_year_id)
            ->where('id', '!=', $classHistory->id)
            ->exists();

        if ($exists) {

            return back()
                ->withInput()
                ->withErrors([
                    'student_id' => 'Siswa sudah memiliki riwayat pada Tahun Ajaran ini.',
                ]);
        }

        $classHistory->update([
            'student_id'       => $request->student_id,
            'academic_year_id' => $request->academic_year_id,
            'class_id'         => $request->class_id,
            'class_number'     => $request->class_number,
            'status'           => $request->status,
        ]);

        return redirect()
            ->route('student-class-histories.index')
            ->with('success', 'Riwayat kelas berhasil diperbarui.');
    }

    public function destroy(int $id)
    {
        $classHistory = StudentClassHistory::findOrFail($id);

        $classHistory->delete();

        return redirect()
            ->route('student-class-histories.index')
            ->with('success', 'Riwayat kelas berhasil dihapus.');
    }
}
