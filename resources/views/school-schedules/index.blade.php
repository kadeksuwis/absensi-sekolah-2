@extends('adminlte::page')

@section('title', 'Jadwal Sekolah')

@section('content_header')

<div class="d-flex justify-content-between">

    <div>

        <h1>

            <i class="fas fa-clock text-danger"></i>

            Jadwal Sekolah

        </h1>

        <small class="text-muted">

            Pengaturan Jam Masuk, Terlambat dan Pulang

        </small>

    </div>

    <div>

        <a href="{{ route('school-schedules.create') }}"
            class="btn btn-danger">

            <i class="fas fa-plus"></i>

            Tambah Jadwal

        </a>

    </div>

</div>

@stop


@section('content')

@if(session('success'))

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

                    Daftar Jadwal Sekolah

                </h3>

            </div>

            <div class="col-md-6">

                <input
                    type="text"
                    id="searchSchedule"
                    class="form-control"
                    placeholder="Cari Hari...">

            </div>

        </div>

    </div>


    <div class="card-body table-responsive p-0">

        <table
            class="table table-bordered table-hover table-striped mb-0"
            id="scheduleTable">

            <thead>

                <tr class="text-center">

                    <th width="60">

                        No

                    </th>

                    <th>

                        Hari

                    </th>

                    <th width="140">

                        Jam Masuk

                    </th>

                    <th width="140">

                        Batas Terlambat

                    </th>

                    <th width="140">

                        Jam Pulang

                    </th>

                    <th width="90">

                        Status

                    </th>

                    <th width="170">

                        Aksi

                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($schedules as $schedule)

                <tr>

                    <td class="text-center">

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        <strong>{{ $schedule->day }}</strong>

                    </td>

                    <td class="text-center">

                        {{ \Carbon\Carbon::parse($schedule->check_in_start)->format('H:i') }}

                    </td>

                    <td class="text-center">

                        {{ \Carbon\Carbon::parse($schedule->late_time)->format('H:i') }}

                    </td>

                    <td class="text-center">

                        {{ \Carbon\Carbon::parse($schedule->check_out_time)->format('H:i') }}

                    </td>

                    <td class="text-center">

                        @if($schedule->is_active)

                            <span class="badge badge-success">

                                Aktif

                            </span>

                        @else

                            <span class="badge badge-danger">

                                Nonaktif

                            </span>

                        @endif

                    </td>

                    <td class="text-center">

                        <a href="{{ route('school-schedules.edit',$schedule->id) }}"
                            class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form
                            action="{{ route('school-schedules.destroy',$schedule->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td
                        colspan="7"
                        class="text-center py-4 text-muted">

                        Belum ada jadwal sekolah.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="card-footer">

        <strong>Total Jadwal :</strong>

        {{ $schedules->count() }}

    </div>

</div>

@stop


@section('js')

<script>

document.getElementById('searchSchedule').addEventListener('keyup', function(){

    let value=this.value.toLowerCase();

    document.querySelectorAll('#scheduleTable tbody tr').forEach(function(row){

        row.style.display=row.innerText.toLowerCase().includes(value)?'':'';

    });

});

</script>

@stop