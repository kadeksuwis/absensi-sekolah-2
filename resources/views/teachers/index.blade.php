@extends('adminlte::page')

@section('title', 'Data Guru')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1 class="mb-1">

                <i class="fas fa-chalkboard-teacher text-danger"></i>

                Data Guru

            </h1>

            <small class="text-muted">

                Master Data Guru SMPN 9 Denpasar

            </small>

        </div>

        <div>

            <a href="{{ route('teachers.create') }}" class="btn btn-danger">

                <i class="fas fa-plus"></i>

                Tambah Guru

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

                        Daftar Guru

                    </h3>

                </div>

                <div class="col-md-6">

                    <input type="text" id="searchTeacher" class="form-control" placeholder="Cari Nama atau NIP...">

                </div>

            </div>

        </div>


        <div class="card-body table-responsive p-0">

            <table class="table table-hover table-bordered table-striped mb-0" id="teacherTable">

                <thead>

                    <tr class="text-center">

                        <th width="60">No</th>

                        <th>Nama Guru</th>

                        <th width="170">NIP</th>

                        <th width="120">Role</th>

                        <th width="170">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($teachers as $teacher)
                        <tr>

                            <td class="text-center">

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                {{ $teacher->nama }}

                            </td>

                            <td>

                                {{ $teacher->nip ?? '-' }}

                            </td>

                            <td class="text-center">

                                @php
                                    $roles = [];
                                @endphp

                                @if ($teacher->is_bk)
                                    @php
                                        $roles[] = 'BK';
                                    @endphp
                                @endif

                                @if ($teacher->is_piket)
                                    @php
                                        $roles[] = 'Piket';
                                    @endphp
                                @endif

                                @if (empty($roles))
                                    <span class="badge badge-primary">

                                        Guru

                                    </span>
                                @else
                                    @foreach ($roles as $role)
                                        @if ($role == 'BK')
                                            <span class="badge badge-info">

                                                BK

                                            </span>
                                        @endif

                                        @if ($role == 'Piket')
                                            <span class="badge badge-warning">

                                                Piket

                                            </span>
                                        @endif
                                    @endforeach
                                @endif

                            </td>

                            <td class="text-center">

                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus guru ini?')">

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

                                Belum ada data guru.

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer">

            <strong>Total Data :</strong>

            {{ $teachers->count() }}

        </div>

    </div>

@stop


@section('js')

    <script>
        document.getElementById('searchTeacher').addEventListener('keyup', function() {

            let value = this.value.toLowerCase();

            let rows = document.querySelectorAll('#teacherTable tbody tr');

            rows.forEach(function(row) {

                row.style.display = row.innerText.toLowerCase().includes(value) ?
                    '' :
                    'none';

            });

        });
    </script>

@stop
