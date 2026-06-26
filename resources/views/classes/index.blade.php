@extends('adminlte::page')

@section('title', 'Data Kelas')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="mb-1">

                <i class="fas fa-school text-danger"></i>

                Data Kelas

            </h1>

            <small class="text-muted">

                Master Data Kelas SMPN 9 Denpasar

            </small>

        </div>

        <div>

            <a href="{{ route('classes.create') }}" class="btn btn-danger">

                <i class="fas fa-plus"></i>

                Tambah Kelas

            </a>

        </div>

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

                        Daftar Kelas

                    </h3>

                </div>

                <div class="col-md-6">

                    <input type="text" id="searchClass" class="form-control"
                        placeholder="Cari Nama Kelas atau Wali Kelas...">

                </div>

            </div>

        </div>

        <div class="card-body table-responsive p-0">

            <table class="table table-hover table-bordered table-striped mb-0" id="classTable">

                <thead>

                    <tr class="text-center">

                        <th width="60">No</th>

                        <th>Nama Kelas</th>

                        <th>Wali Kelas</th>

                        <th width="120">Jumlah Siswa</th>

                        <th width="170">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($classes as $class)
                        <tr>

                            <td class="text-center">

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                <strong>{{ $class->nama_kelas }}</strong>

                            </td>

                            <td>

                                {{ $class->wali->nama ?? '-' }}

                            </td>

                            <td class="text-center">

                                <span class="badge badge-primary">

                                    {{ $class->students->count() }}

                                </span>

                            </td>

                            <td class="text-center">

                                <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus kelas {{ $class->nama_kelas }} ?')">

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

                            <td colspan="5" class="text-center text-muted py-4">

                                Belum ada data kelas.

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer">

            <strong>Total Data :</strong>

            {{ $classes->count() }}

        </div>

    </div>

@stop


@section('js')

    <script>
        document.getElementById('searchClass').addEventListener('keyup', function() {

            let value = this.value.toLowerCase();

            let rows = document.querySelectorAll('#classTable tbody tr');

            rows.forEach(function(row) {

                row.style.display = row.innerText.toLowerCase().includes(value) ?
                    '' :
                    'none';

            });

        });
    </script>

@stop
