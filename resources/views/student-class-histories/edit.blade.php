@extends('adminlte::page')

@section('title', 'Edit Riwayat Kelas')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1>

                <i class="fas fa-history text-warning"></i>

                Edit Riwayat Kelas

            </h1>

            <small class="text-muted">

                Perbarui Riwayat Kelas Siswa

            </small>

        </div>

        <div>

            <a href="{{ route('student-class-histories.index') }}" class="btn btn-secondary">

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


    <div class="card card-warning card-outline">

        <div class="card-header">

            <h3 class="card-title">

                Form Edit Riwayat Kelas

            </h3>

        </div>

        <form action="{{ route('student-class-histories.update', $classHistory->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                {{-- Tahun Ajaran --}}

                <div class="form-group">

                    <label>

                        Tahun Ajaran

                    </label>

                    <select name="academic_year_id" class="form-control" required>

                        @foreach ($academicYears as $academicYear)
                            <option value="{{ $academicYear->id }}"
                                {{ old('academic_year_id', $classHistory->academic_year_id) == $academicYear->id ? 'selected' : '' }}>

                                {{ $academicYear->nama }}

                                @if ($academicYear->is_active)
                                    (Aktif)
                                @endif

                            </option>
                        @endforeach

                    </select>

                </div>


                {{-- Siswa --}}

                <div class="form-group">

                    <label>

                        Siswa

                    </label>

                    <select name="student_id" class="form-control" required>

                        @foreach ($students as $student)
                            <option value="{{ $student->id }}"
                                {{ old('student_id', $classHistory->student_id) == $student->id ? 'selected' : '' }}>

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

                    <select name="class_id" class="form-control" required>

                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}"
                                {{ old('class_id', $classHistory->class_id) == $class->id ? 'selected' : '' }}>

                                {{ $class->nama_kelas }}

                            </option>
                        @endforeach

                    </select>

                </div>


                {{-- Nomor Urut --}}

                <div class="form-group">

                    <label>

                        Nomor Urut Kelas

                    </label>

                    <input type="number" name="class_number" class="form-control" min="1" max="99"
                        value="{{ old('class_number', $classHistory->class_number) }}" required>

                </div>


                {{-- Status --}}

                <div class="form-group">

                    <label>

                        Status

                    </label>

                    <select name="status" class="form-control">

                        <option value="aktif" {{ old('status', $classHistory->status) == 'aktif' ? 'selected' : '' }}>
                            Aktif
                        </option>

                        <option value="naik" {{ old('status', $classHistory->status) == 'naik' ? 'selected' : '' }}>
                            Naik Kelas
                        </option>

                        <option value="lulus" {{ old('status', $classHistory->status) == 'lulus' ? 'selected' : '' }}>
                            Lulus
                        </option>

                        <option value="pindah" {{ old('status', $classHistory->status) == 'pindah' ? 'selected' : '' }}>
                            Pindah
                        </option>

                        <option value="keluar" {{ old('status', $classHistory->status) == 'keluar' ? 'selected' : '' }}>
                            Keluar
                        </option>

                    </select>

                </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-warning">

                    <i class="fas fa-save"></i>

                    Update

                </button>

                <a href="{{ route('student-class-histories.index') }}" class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

@stop
