@extends('layouts.admin')

@section('title', 'Edit Siswa')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between mb-3">

        <div>
            <h3>Edit Data Siswa</h3>
            <small class="text-muted">Perbarui data siswa</small>
        </div>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </div>

    <div class="card">

        <div class="card-header bg-warning">
            Form Edit Siswa
        </div>

        <form action="{{ route('students.update',$student->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="mb-3">

                    <label>NIS</label>

                    <input
                        type="text"
                        name="nis"
                        class="form-control"
                        value="{{ old('nis',$student->nis) }}"
                        required>

                </div>

                <div class="mb-3">

                    <label>Nama</label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama',$student->nama) }}"
                        required>

                </div>

                <div class="mb-3">

                    <label>Kelas</label>

                    <select
                        name="class_id"
                        class="form-select"
                        required>

                        @foreach($classes as $class)

                        <option
                            value="{{ $class->id }}"
                            {{ $student->class_id==$class->id ? 'selected' : '' }}>

                            {{ $class->nama_kelas }}

                        </option>

                        @endforeach

                    </select>

                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-warning">

                    Update

                </button>

                <a href="{{ route('students.index') }}"
                    class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

</div>

@endsection