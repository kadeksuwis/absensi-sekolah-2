@extends('adminlte::page')

@section('title', 'Tambah Guru')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="mb-1">

                <i class="fas fa-user-plus text-danger"></i>

                Tambah Guru

            </h1>

            <small class="text-muted">

                Tambahkan data guru baru

            </small>

        </div>

        <div>

            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">

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

                Form Data Guru

            </h3>

        </div>

        <form action="{{ route('teachers.store') }}" method="POST">

            @csrf

            <div class="card-body">

                <div class="form-group">

                    <label>Nama Guru</label>

                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}"
                        placeholder="Masukkan Nama Guru" required>

                </div>

                <div class="form-group">

                    <label>NIP</label>

                    <input type="text" name="nip" class="form-control" value="{{ old('nip') }}"
                        placeholder="Masukkan NIP">

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                        placeholder="Masukkan Email" required>

                </div>

                <div class="form-group">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>

                </div>

                <div class="form-group">

                    <label>Konfirmasi Password</label>

                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Password"
                        required>

                </div>

                <div class="form-group">

                    <label>Status Guru</label>

                    <div class="mt-2">

                        <div class="custom-control custom-checkbox">

                            <input type="checkbox" class="custom-control-input" id="is_bk" name="is_bk" value="1"
                                {{ old('is_bk') ? 'checked' : '' }}>

                            <label class="custom-control-label" for="is_bk">

                                Guru BK

                            </label>

                        </div>

                        <div class="custom-control custom-checkbox mt-2">

                            <input type="checkbox" class="custom-control-input" id="is_piket" name="is_piket"
                                value="1" {{ old('is_piket') ? 'checked' : '' }}>

                            <label class="custom-control-label" for="is_piket">

                                Guru Piket

                            </label>

                        </div>

                    </div>

                </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-danger">

                    <i class="fas fa-save"></i>

                    Simpan

                </button>

                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

@stop
