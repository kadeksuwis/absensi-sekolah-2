@extends('adminlte::page')

@section('title', 'Data Siswa')

@section('content_header')

    <div class="d-flex justify-content-between align-items-center">

        <div>

            <h1>
                <i class="fas fa-user-graduate text-danger"></i>
                Data Siswa
            </h1>

            <small class="text-muted">
                Master Data Siswa SMPN 9 Denpasar
            </small>

        </div>

        <a href="{{ route('students.create') }}" class="btn btn-danger">

            <i class="fas fa-plus"></i>

            Tambah Siswa

        </a>

    </div>

@stop


@section('content')

    @if (session('success'))
        <div class="alert alert-success">

            <i class="fas fa-check-circle"></i>

            {{ session('success') }}

        </div>
    @endif


    <div class="card card-danger card-outline">

        <div class="card-header">

            <div class="row">

                <div class="col-md-6">

                    <h3 class="card-title">

                        Daftar Siswa

                    </h3>

                </div>

                <div class="col-md-6">

                    <input type="text" id="searchStudent" class="form-control" placeholder="Cari NIS atau Nama Siswa...">

                </div>

            </div>

        </div>

        <div class="card-body table-responsive p-0">

            <table class="table table-hover table-bordered table-striped mb-0" id="studentTable">

                <thead>

                    <tr class="text-center">

                        <th width="60">No</th>

                        <th width="120">NIS</th>

                        <th>Nama Siswa</th>

                        <th width="120">Kelas</th>

                        <th width="120">QR</th>

                        <th width="170">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($students as $student)
                        <tr>

                            <td class="text-center">

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                {{ $student->nis }}

                            </td>

                            <td>

                                {{ $student->nama }}

                            </td>

                            <td class="text-center">

                                @if ($student->schoolClass)
                                    <span class="badge badge-primary">

                                        {{ $student->schoolClass->nama_kelas }}

                                    </span>
                                @else
                                    <span class="badge badge-secondary">

                                        Belum Ada

                                    </span>
                                @endif

                            </td>

                            <td class="text-center">

                                <span class="badge badge-success">

                                    Siap

                                </span>

                            </td>

                            <td class="text-center">

                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus siswa {{ $student->nama }} ?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center text-muted py-4">

                                Belum ada data siswa.

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer">

            <strong>Total Data :</strong>

            {{ $students->count() }}

        </div>

    </div>

@stop


@section('js')

    <script>
        document.getElementById('searchStudent').addEventListener('keyup', function() {

            let value = this.value.toLowerCase();

            let rows = document.querySelectorAll('#studentTable tbody tr');

            rows.forEach(function(row) {

                row.style.display = row.innerText.toLowerCase().includes(value) ?
                    '' :
                    'none';

            });

        });
    </script>

@stop
