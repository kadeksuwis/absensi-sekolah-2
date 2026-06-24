<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    public function index()
    {
        $classes = SchoolClass::with('wali')->get();

        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        $usedWali = SchoolClass::pluck('wali_teacher_id');

        $teachers = Teacher::whereNotIn('id', $usedWali)
            ->orderBy('nama')
            ->get();

        return view('classes.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        SchoolClass::create([
            'nama_kelas' => $request->nama_kelas,
            'wali_teacher_id' => $request->wali_teacher_id,
        ]);

        return redirect('/admin/classes');
    }

    public function edit(int $id)
    {
        $class = SchoolClass::findOrFail($id);

        $teachers = Teacher::orderBy('nama')->get();

        return view('classes.edit', compact('class', 'teachers'));
    }

    public function update(Request $request, int $id)
    {
        $class = SchoolClass::findOrFail($id);

        $class->update([
            'nama_kelas' => $request->nama_kelas,
            'wali_teacher_id' => $request->wali_teacher_id,
        ]);

        return redirect('/admin/classes');
    }

    public function destroy(int $id)
    {
        $class = SchoolClass::findOrFail($id);

        $class->delete();

        return redirect('/admin/classes');
    }
}
