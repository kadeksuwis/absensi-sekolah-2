<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('schoolClass')
            ->orderBy('nama')
            ->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classes = SchoolClass::orderBy('nama_kelas')->get();

        return view('students.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:students',
            'nama' => 'required',
            'class_id' => 'required',
        ]);

        Student::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'class_id' => $request->class_id,
            'qr_token' => Str::uuid(),
        ]);

        return redirect()->route('students.index');
    }

    public function edit(int $id)
    {
        $student = Student::findOrFail($id);

        $classes = SchoolClass::orderBy('nama_kelas')->get();

        return view('students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, int $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:students,nis,' . $student->id,
            'nama' => 'required',
            'class_id' => 'required',
        ]);

        $student->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'class_id' => $request->class_id,
        ]);

        return redirect()->route('students.index');
    }

    public function destroy(int $id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}
