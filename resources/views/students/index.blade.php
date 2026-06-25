@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>
                <h3 class="mb-0">
                    <i class="fas fa-user-graduate text-danger"></i>
                    Data Siswa
                </h3>

                <small class="text-muted">
                    Master Data Siswa
                </small>
            </div>

            <a href="{{ route('students.create') }}" class="btn btn-danger">
                <i class="fas fa-plus"></i>
                Tambah Siswa
            </a>

        </div>

        <!-- Card -->
        <div class="card shadow-sm">

            <div class="card-header bg-danger text-white">

                <div class="row align-items-center">

                    <div class="col-md-6">
                        <strong>Daftar Siswa</strong>
                    </div>

                    <div class="col-md-6">

                        <input type="text" id="searchStudent" class="form-control" placeholder="Cari siswa...">

                    </div>

                </div>

            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover table-bordered mb-0" id="studentTable">

                        <thead class="table-light">

                            <tr class="text-center">

                                <th width="60">No</th>

                                <th width="130">NIS</th>

                                <th>Nama Siswa</th>

                                <th width="120">Kelas</th>

                                <th width="110">QR</th>

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
                                            <span class="badge bg-primary">
                                                {{ $student->schoolClass->nama_kelas }}
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">
                                                Belum Ada
                                            </span>
                                        @endif

                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-success">
                                            Siap
                                        </span>

                                    </td>

                                    <td>

                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">

                                            Edit

                                        </a>

                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus siswa?')">

                                                Hapus

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6" class="text-center py-4 text-muted">

                                        Belum ada data siswa.

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

            <div class="card-footer">

                Total Data :
                <strong>{{ $students->count() }}</strong>

            </div>


        </div>

    </div>

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

@endsection
