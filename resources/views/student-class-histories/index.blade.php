@extends('adminlte::page')

@section('title', 'Riwayat Kelas Siswa')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1>

                <i class="fas fa-history text-danger"></i>

                Riwayat Kelas Siswa

            </h1>

            <small class="text-muted">

                Riwayat Penempatan Siswa setiap Tahun Ajaran

            </small>

        </div>

        <div>

            <a href="{{ route('student-class-histories.create') }}" class="btn btn-danger">

                <i class="fas fa-plus"></i>

                Tambah Riwayat

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

                        Daftar Riwayat Kelas

                    </h3>

                </div>

                <div class="col-md-6">

                    <input type="text" id="searchHistory" class="form-control" placeholder="Cari Nama atau NIS...">

                </div>

            </div>

        </div>


        <div class="card-body table-responsive p-0">

            <table class="table table-bordered table-hover table-striped mb-0" id="historyTable">

                <thead>

                    <tr class="text-center">

                        <th width="60">No</th>

                        <th>Nama Siswa</th>

                        <th width="150">Tahun Ajaran</th>

                        <th width="100">Kelas</th>

                        <th width="80">No</th>

                        <th width="120">Status</th>

                        <th width="170">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($classHistories as $history)
                        <tr>

                            <td class="text-center">

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                <strong>{{ $history->student->nama }}</strong>

                                <br>

                                <small class="text-muted">

                                    {{ $history->student->nis }}

                                </small>

                            </td>

                            <td class="text-center">

                                <span class="badge badge-info">

                                    {{ $history->academicYear->nama }}

                                </span>

                            </td>

                            <td class="text-center">

                                <span class="badge badge-primary">

                                    {{ $history->schoolClass->nama_kelas }}

                                </span>

                            </td>

                            <td class="text-center">

                                {{ $history->class_number }}

                            </td>

                            <td class="text-center">

                                @if ($history->status == 'aktif')
                                    <span class="badge badge-success">

                                        Aktif

                                    </span>
                                @elseif($history->status == 'naik')
                                    <span class="badge badge-primary">

                                        Naik

                                    </span>
                                @elseif($history->status == 'lulus')
                                    <span class="badge badge-dark">

                                        Lulus

                                    </span>
                                @elseif($history->status == 'pindah')
                                    <span class="badge badge-warning">

                                        Pindah

                                    </span>
                                @else
                                    <span class="badge badge-danger">

                                        Keluar

                                    </span>
                                @endif

                            </td>

                            <td class="text-center">

                                <a href="{{ route('student-class-histories.edit', $history->id) }}"
                                    class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <form action="{{ route('student-class-histories.destroy', $history->id) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin ingin menghapus riwayat kelas ini?')">

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

                            <td colspan="7" class="text-center py-4 text-muted">

                                Belum ada data Riwayat Kelas.

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer">

            <strong>Total Data :</strong>

            {{ $classHistories->count() }}

        </div>

    </div>

@stop


@section('js')

    <script>
        document.getElementById('searchHistory').addEventListener('keyup', function() {

            let value = this.value.toLowerCase();

            document.querySelectorAll('#historyTable tbody tr').forEach(function(row) {

                row.style.display = row.innerText.toLowerCase().includes(value) ? '' : 'none';

            });

        });
    </script>

@stop
