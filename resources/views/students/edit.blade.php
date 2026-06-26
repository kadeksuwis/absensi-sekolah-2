@extends('adminlte::page')

@section('title', 'Edit Siswa')

@section('content_header')

    <h1>
        <i class="fas fa-user-edit text-warning"></i>
        Edit Siswa
    </h1>

@stop

@section('content')

    <div class="card card-warning">

        <div class="card-header">

            <h3 class="card-title">

                Form Edit Siswa

            </h3>

        </div>

        <form action="{{ route('students.update', $student->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>

                @endif

                <div class="form-group">

                    <label>NIS</label>

                    <input type="text" name="nis" class="form-control" value="{{ old('nis', $student->nis) }}"
                        required>

                </div>

                <div class="form-group">

                    <label>Nama Siswa</label>

                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $student->nama) }}"
                        required>

                </div>

                <div class="form-group">

                    <label>Kelas</label>

                    <select name="class_id" class="form-control" required>

                        <option value="">
                            -- Pilih Kelas --
                        </option>

                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}"
                                {{ old('class_id', $student->class_id) == $class->id ? 'selected' : '' }}>

                                {{ $class->nama_kelas }}

                            </option>
                        @endforeach

                    </select>

                </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-warning">

                    <i class="fas fa-save"></i>

                    Update

                </button>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@stop
