@extends('layouts.admin')

@section('title', 'Tambah Siswa')

@section('content')

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>
                <h3 class="mb-0">
                    <i class="fas fa-user-plus text-danger"></i>
                    Tambah Siswa
                </h3>

                <small class="text-muted">
                    Tambahkan data siswa baru
                </small>
            </div>

            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>

        </div>

        <div class="card shadow-sm">

            <div class="card-header bg-danger text-white">
                Form Data Siswa
            </div>

            <form action="{{ route('students.store') }}" method="POST">

                @csrf

                <div class="card-body">

                    <div class="mb-3">

                        <label class="form-label">
                            NIS
                        </label>

                        <input type="text" name="nis" class="form-control" value="{{ old('nis') }}" required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Siswa
                        </label>

                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Kelas
                        </label>

                        <select name="class_id" class="form-select" required>

                            <option value="">
                                -- Pilih Kelas --
                            </option>

                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>
                                    {{ $class->nama_kelas }}
                                </option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="card-footer">

                    <button class="btn btn-danger">

                        <i class="fas fa-save"></i>

                        Simpan

                    </button>

                    <a href="{{ route('students.index') }}" class="btn btn-secondary">

                        Batal

                    </a>

                </div>

            </form>

        </div>

    </div>

@endsection
