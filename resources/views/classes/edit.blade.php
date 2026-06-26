@extends('adminlte::page')

@section('title', 'Edit Kelas')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="mb-1">

                <i class="fas fa-school text-warning"></i>

                Edit Kelas

            </h1>

            <small class="text-muted">

                Perbarui Data Kelas

            </small>

        </div>

        <div>

            <a href="{{ route('classes.index') }}" class="btn btn-secondary">

                <i class="fas fa-arrow-left"></i>

                Kembali

            </a>

        </div>

    </div>

@stop


@section('content')

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Terjadi Kesalahan!</strong>

            <ul class="mb-0 mt-2">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <div class="card card-warning card-outline">

        <div class="card-header">

            <h3 class="card-title">

                Form Edit Kelas

            </h3>

        </div>

        <form action="{{ route('classes.update', $class->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group">

                    <label>Nama Kelas</label>

                    <input type="text" name="nama_kelas" class="form-control"
                        value="{{ old('nama_kelas', $class->nama_kelas) }}" required>

                </div>

                <div class="form-group">

                    <label>Wali Kelas</label>

                    <select name="wali_teacher_id" class="form-control">

                        <option value="">

                            -- Pilih Wali Kelas --

                        </option>

                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                                {{ old('wali_teacher_id', $class->wali_teacher_id) == $teacher->id ? 'selected' : '' }}>

                                {{ $teacher->nama }}

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

                <a href="{{ route('classes.index') }}" class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

@stop
