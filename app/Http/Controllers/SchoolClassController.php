<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    public function index()
    {
        $classes = SchoolClass::with([
            'wali',
            'students'
        ])
        ->orderBy('nama_kelas')
        ->get();

        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        // Guru yang sudah menjadi wali
        $usedWali = SchoolClass::whereNotNull('wali_teacher_id')
            ->pluck('wali_teacher_id');

        // Hanya guru yang belum menjadi wali
        $teachers = Teacher::whereNotIn('id', $usedWali)
            ->orderBy('nama')
            ->get();

        return view('classes.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|max:20|unique:school_classes,nama_kelas',
            'wali_teacher_id' => 'required|exists:teachers,id|unique:school_classes,wali_teacher_id',
        ], [
            'nama_kelas.required' => 'Nama kelas wajib diisi.',
            'nama_kelas.unique' => 'Nama kelas sudah digunakan.',
            'wali_teacher_id.required' => 'Silakan pilih wali kelas.',
            'wali_teacher_id.unique' => 'Guru tersebut sudah menjadi wali kelas.',
        ]);

        SchoolClass::create([
            'nama_kelas' => strtoupper($request->nama_kelas),
            'wali_teacher_id' => $request->wali_teacher_id,
        ]);

        return redirect()
            ->route('classes.index')
            ->with('success', 'Data kelas berhasil ditambahkan.');
    }

    public function edit(int $id)
    {
        $class = SchoolClass::findOrFail($id);

        // Semua wali kecuali kelas yang sedang diedit
        $usedWali = SchoolClass::where('id', '!=', $class->id)
            ->whereNotNull('wali_teacher_id')
            ->pluck('wali_teacher_id');

        // Guru yang belum menjadi wali
        // + wali milik kelas ini sendiri
        $teachers = Teacher::where(function ($query) use ($usedWali, $class) {

            $query->whereNotIn('id', $usedWali);

            if ($class->wali_teacher_id) {
                $query->orWhere('id', $class->wali_teacher_id);
            }

        })
        ->orderBy('nama')
        ->get();

        return view('classes.edit', compact('class', 'teachers'));
    }

    public function update(Request $request, int $id)
    {
        $class = SchoolClass::findOrFail($id);

        $request->validate([
            'nama_kelas' => 'required|max:20|unique:school_classes,nama_kelas,' . $class->id,
            'wali_teacher_id' => 'required|exists:teachers,id|unique:school_classes,wali_teacher_id,' . $class->id,
        ], [
            'nama_kelas.required' => 'Nama kelas wajib diisi.',
            'nama_kelas.unique' => 'Nama kelas sudah digunakan.',
            'wali_teacher_id.required' => 'Silakan pilih wali kelas.',
            'wali_teacher_id.unique' => 'Guru tersebut sudah menjadi wali kelas.',
        ]);

        $class->update([
            'nama_kelas' => strtoupper($request->nama_kelas),
            'wali_teacher_id' => $request->wali_teacher_id,
        ]);

        return redirect()
            ->route('classes.index')
            ->with('success', 'Data kelas berhasil diperbarui.');
    }

    public function destroy(int $id)
    {
        $class = SchoolClass::findOrFail($id);

        $class->delete();

        return redirect()
            ->route('classes.index')
            ->with('success', 'Data kelas berhasil dihapus.');
    }
}