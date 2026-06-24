@extends('layouts.admin')

@section('content')
    <h1>Tambah Kelas</h1>

    <form action="{{ route('classes.store') }}" method="POST">
        @csrf

        <div>
            <label>Nama Kelas</label>
            <br>
            <input type="text" name="nama_kelas" required>
        </div>

        <br>

        <div>
            <label>Wali Kelas</label>
            <br>

            <select name="wali_teacher_id">
                <option value="">
                    -- Pilih Wali Kelas --
                </option>

                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">
                        {{ $teacher->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">
            Simpan
        </button>

        <a href="{{ route('classes.index') }}">
            Kembali
        </a>

    </form>
@endsection
