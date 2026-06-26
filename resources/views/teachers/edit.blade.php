@extends('adminlte::page')

@section('title', 'Edit Guru')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="mb-1">
                <i class="fas fa-user-edit text-warning"></i>
                Edit Guru
            </h1>

            <small class="text-muted">
                Perbarui Data Guru SMPN 9 Denpasar
            </small>

        </div>

    </div>

@stop

@section('content')

    @if ($errors->any())

        <div class="alert alert-danger">

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

                Form Edit Guru

            </h3>

        </div>

        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group">

                    <label>Nama Guru</label>

                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $teacher->nama) }}"
                        required>

                </div>

                <div class="form-group">

                    <label>NIP</label>

                    <input type="text" name="nip" class="form-control" value="{{ old('nip', $teacher->nip) }}">

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input type="email" name="email" class="form-control"
                        value="{{ old('email', $teacher->user->email) }}" required>

                </div>

                <hr>

                <div class="form-group">

                    <label>Password Baru</label>

                    <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak diubah">

                </div>

                <div class="form-group">

                    <label>Konfirmasi Password</label>

                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Password">

                </div>

                <hr>

                <div class="form-group">

                    <label>Status Guru</label>

                    <div class="form-check">

                        <input type="checkbox" class="form-check-input" id="bk" name="is_bk" value="1"
                            {{ old('is_bk', $teacher->is_bk) ? 'checked' : '' }}>

                        <label class="form-check-label" for="bk">

                            Guru BK

                        </label>

                    </div>

                    <div class="form-check mt-2">

                        <input type="checkbox" class="form-check-input" id="piket" name="is_piket" value="1"
                            {{ old('is_piket', $teacher->is_piket) ? 'checked' : '' }}>

                        <label class="form-check-label" for="piket">

                            Guru Piket

                        </label>

                    </div>

                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-warning">

                    <i class="fas fa-save"></i>

                    Update

                </button>

                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">

                    <i class="fas fa-arrow-left"></i>

                    Kembali

                </a>

            </div>

        </form>

    </div>

@stop
