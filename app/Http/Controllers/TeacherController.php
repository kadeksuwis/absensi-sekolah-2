<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('user')
            ->orderBy('nama')
            ->get();

        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|max:100',
            'nip'      => 'nullable|max:30',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name'      => $request->nama,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => 'guru',
            'is_active' => true,
        ]);

        Teacher::create([
            'user_id'   => $user->id,
            'nama'      => $request->nama,
            'nip'       => $request->nip,
            'is_bk'     => $request->has('is_bk'),
            'is_piket'  => $request->has('is_piket'),
        ]);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit(int $id)
    {
        $teacher = Teacher::with('user')->findOrFail($id);

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, int $id)
    {
        $teacher = Teacher::with('user')->findOrFail($id);

        $request->validate([
            'nama'  => 'required|max:100',
            'nip'   => 'nullable|max:30',
            'email' => 'required|email|unique:users,email,' . $teacher->user->id,
        ]);

        $teacher->update([
            'nama'      => $request->nama,
            'nip'       => $request->nip,
            'is_bk'     => $request->has('is_bk'),
            'is_piket'  => $request->has('is_piket'),
        ]);

        $teacher->user->update([
            'name'  => $request->nama,
            'email' => $request->email,
        ]);

        if ($request->filled('password')) {

            $teacher->user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy(int $id)
    {
        $teacher = Teacher::with('user')->findOrFail($id);

        $teacher->user->delete();

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}
