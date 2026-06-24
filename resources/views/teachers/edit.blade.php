@extends('layouts.admin')

@section('content')
    <h1>Edit Guru</h1>

    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">

        @csrf
        @method('PUT')

        <p>Nama Guru</p>
        <input type="text" name="nama" value="{{ $teacher->nama }}" required>

        <br><br>

        <p>NIP</p>
        <input type="text" name="nip" value="{{ $teacher->nip }}">

        <br><br>

        <p>Email</p>
        <input type="email" name="email" value="{{ $teacher->user->email }}" required>

        <br><br>

        <label>
            <input type="checkbox" name="is_bk" {{ $teacher->is_bk ? 'checked' : '' }}>
            Guru BK
        </label>

        <br>

        <label>
            <input type="checkbox" name="is_piket" {{ $teacher->is_piket ? 'checked' : '' }}>
            Guru Piket
        </label>

        <br><br>

        <button type="submit">
            Update
        </button>

        <a href="{{ route('teachers.index') }}">
            Kembali
        </a>

    </form>
@endsection
