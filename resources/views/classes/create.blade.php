@extends('adminlte::page')

@section('title', 'Tambah Kelas')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="mb-1">

                <i class="fas fa-school text-danger"></i>

                Tambah Kelas

            </h1>

            <small class="text-muted">

                Tambahkan Data Kelas Baru

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


    <div class="card card-danger card-outline">

        <div class="card-header">

            <h3 class="card-title">

                Form Data Kelas

            </h3>

        </div>

        <form action="{{ route('classes.store') }}" method="POST">

            @csrf

            <div class="card-body">

                <div class="form-group">

                    <label>Nama Kelas</label>

                    <input type="text" name="nama_kelas" class="form-control" value="{{ old('nama_kelas') }}"
                        placeholder="Contoh : 7A" required>

                </div>

                <div class="form-group">

                    <label>Wali Kelas</label>

                    <select name="wali_teacher_id" class="form-control">

                        <option value="">

                            -- Pilih Wali Kelas --

                        </option>

                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                                {{ old('wali_teacher_id') == $teacher->id ? 'selected' : '' }}>

                                {{ $teacher->nama }}

                            </option>
                        @endforeach

                    </select>

                    <small class="text-muted">

                        Guru yang sudah menjadi wali kelas tidak akan ditampilkan.

                    </small>

                </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-danger">

                    <i class="fas fa-save"></i>

                    Simpan

                </button>

                <a href="{{ route('classes.index') }}" class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

    @stop
