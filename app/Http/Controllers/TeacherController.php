<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('user')->get();

        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guru',
            'is_active' => true,
        ]);

        Teacher::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'is_bk' => $request->has('is_bk'),
            'is_piket' => $request->has('is_piket'),
        ]);

        return redirect()->route('teachers.index');
    }
    public function edit(int $id)
    {
        $teacher = Teacher::with('user')->findOrFail($id);

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, int $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'is_bk' => $request->has('is_bk'),
            'is_piket' => $request->has('is_piket'),
        ]);

        $teacher->user->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect()->route('teachers.index');
    }

    public function destroy(int $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->user->delete();

        return redirect()->route('teachers.index');
    }
}
