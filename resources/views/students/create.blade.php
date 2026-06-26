@extends('adminlte::page')

@section('title', 'Tambah Siswa')

@section('content_header')

    <h1>
        <i class="fas fa-user-plus text-danger"></i>
        Tambah Siswa
    </h1>

@stop

@section('content')

    <div class="card card-danger">

        <div class="card-header">

            <h3 class="card-title">

                Form Data Siswa

            </h3>

        </div>

        <form action="{{ route('students.store') }}" method="POST">

            @csrf

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

                    <input type="text" name="nis" class="form-control" value="{{ old('nis') }}" required>

                </div>

                <div class="form-group">

                    <label>Nama Siswa</label>

                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>

                </div>

                <div class="form-group">

                    <label>Kelas</label>

                    <select name="class_id" class="form-control" required>

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

                <button type="submit" class="btn btn-danger">

                    <i class="fas fa-save"></i>

                    Simpan

                </button>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@stop
