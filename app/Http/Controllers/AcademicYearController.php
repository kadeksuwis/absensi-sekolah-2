<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    public function index()
    {
        $academicYears = AcademicYear::orderByDesc('id')->get();

        return view('academic-years.index', compact('academicYears'));
    }

    public function create()
    {
        return view('academic-years.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_year' => 'required|integer|unique:academic_years,start_year',
            'is_active' => 'nullable',
        ]);

        if ($request->has('is_active')) {

            AcademicYear::query()->update([
                'is_active' => false,
            ]);
        }

        $nama = $request->start_year . '/' . ($request->start_year + 1);

        AcademicYear::create([
            'start_year' => $request->start_year,
            'nama'       => $nama,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()
            ->route('academic-years.index')
            ->with('success', 'Tahun ajaran berhasil ditambahkan.');
    }

    public function edit(int $id)
    {
        $academicYear = AcademicYear::findOrFail($id);

        return view('academic-years.edit', compact('academicYear'));
    }

    public function update(Request $request, int $id)
    {
        $academicYear = AcademicYear::findOrFail($id);

        $request->validate([
            'start_year' => 'required|integer|unique:academic_years,start_year,' . $academicYear->id,
            'is_active' => 'nullable',
        ]);

        if ($request->has('is_active')) {

            AcademicYear::query()->update([
                'is_active' => false,
            ]);
        }

        $nama = $request->start_year . '/' . ($request->start_year + 1);

        $academicYear->update([
            'start_year' => $request->start_year,
            'nama'       => $nama,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()
            ->route('academic-years.index')
            ->with('success', 'Tahun ajaran berhasil diperbarui.');
    }

    public function destroy(int $id)
    {
        $academicYear = AcademicYear::findOrFail($id);

        $academicYear->delete();

        return redirect()
            ->route('academic-years.index')
            ->with('success', 'Tahun ajaran berhasil dihapus.');
    }
}
