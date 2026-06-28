@extends('adminlte::page')

@section('title', 'Tambah Riwayat Kelas')

@section('content_header')

<div class="d-flex justify-content-between">

    <div>

        <h1>
            <i class="fas fa-history text-danger"></i>
            Tambah Riwayat Kelas
        </h1>

        <small class="text-muted">
            Tambahkan riwayat kelas siswa
        </small>

    </div>

    <div>

        <a href="{{ route('student-class-histories.index') }}"
            class="btn btn-secondary">

            <i class="fas fa-arrow-left"></i>

            Kembali

        </a>

    </div>

</div>

@stop


@section('content')

@if ($errors->any())

<div class="alert alert-danger">

    <strong>Terjadi Kesalahan</strong>

    <ul class="mb-0">

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif


<div class="card card-danger card-outline">

    <div class="card-header">

        <h3 class="card-title">

            Form Riwayat Kelas

        </h3>

    </div>

    <form action="{{ route('student-class-histories.store') }}"
        method="POST">

        @csrf

        <div class="card-body">

            {{-- Tahun Ajaran --}}

            <div class="form-group">

                <label>

                    Tahun Ajaran

                </label>

                <input
                    type="text"
                    class="form-control"
                    value="{{ $academicYear->nama }}"
                    readonly>

                <input
                    type="hidden"
                    name="academic_year_id"
                    value="{{ $academicYear->id }}">

            </div>


            {{-- Siswa --}}

            <div class="form-group">

                <label>

                    Siswa

                </label>

                <select
                    name="student_id"
                    class="form-control"
                    required>

                    <option value="">

                        -- Pilih Siswa --

                    </option>

                    @foreach($students as $student)

                    <option
                        value="{{ $student->id }}"
                        {{ old('student_id')==$student->id ? 'selected' : '' }}>

                        {{ $student->nis }}

                        -

                        {{ $student->nama }}

                    </option>

                    @endforeach

                </select>

            </div>


            {{-- Kelas --}}

            <div class="form-group">

                <label>

                    Kelas

                </label>

                <select
                    name="class_id"
                    class="form-control"
                    required>

                    <option value="">

                        -- Pilih Kelas --

                    </option>

                    @foreach($classes as $class)

                    <option
                        value="{{ $class->id }}"
                        {{ old('class_id')==$class->id ? 'selected' : '' }}>

                        {{ $class->nama_kelas }}

                    </option>

                    @endforeach

                </select>

            </div>


            {{-- Nomor Kelas --}}

            <div class="form-group">

                <label>

                    Nomor Urut Kelas

                </label>

                <input
                    type="number"
                    name="class_number"
                    class="form-control"
                    min="1"
                    max="99"
                    value="{{ old('class_number') }}"
                    required>

            </div>

        </div>

        <div class="card-footer">

            <button
                type="submit"
                class="btn btn-danger">

                <i class="fas fa-save"></i>

                Simpan

            </button>

            <a
                href="{{ route('student-class-histories.index') }}"
                class="btn btn-secondary">

                Batal

            </a>

        </div>

    </form>

</div>

@stop