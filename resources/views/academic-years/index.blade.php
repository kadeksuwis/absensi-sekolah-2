@extends('adminlte::page')

@section('title', 'Tahun Ajaran')

@section('content_header')

<div class="d-flex justify-content-between">

    <div>

        <h1>
            <i class="fas fa-calendar-alt text-danger"></i>
            Tahun Ajaran
        </h1>

        <small class="text-muted">
            Master Data Tahun Ajaran SMPN 9 Denpasar
        </small>

    </div>

    <div>

        <a href="{{ route('academic-years.create') }}" class="btn btn-danger">

            <i class="fas fa-plus"></i>

            Tambah Tahun Ajaran

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

                    Daftar Tahun Ajaran

                </h3>

            </div>

            <div class="col-md-6">

                <input
                    type="text"
                    id="searchAcademic"
                    class="form-control"
                    placeholder="Cari Tahun Ajaran...">

            </div>

        </div>

    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered table-striped mb-0" id="academicTable">

            <thead>

            <tr class="text-center">

                <th width="70">No</th>

                <th>Tahun Ajaran</th>

                <th width="150">Status</th>

                <th width="170">Aksi</th>

            </tr>

            </thead>

            <tbody>

            @forelse($academicYears as $year)

                <tr>

                    <td class="text-center">

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        {{ $year->nama }}

                    </td>

                    <td class="text-center">

                        @if($year->is_active)

                            <span class="badge badge-success">

                                Aktif

                            </span>

                        @else

                            <span class="badge badge-secondary">

                                Nonaktif

                            </span>

                        @endif

                    </td>

                    <td class="text-center">

                        <a
                            href="{{ route('academic-years.edit',$year->id) }}"
                            class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form
                            action="{{ route('academic-years.destroy',$year->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus tahun ajaran ini?')">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4" class="text-center py-4">

                        Belum ada data.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="card-footer">

        <strong>Total Data :</strong>

        {{ $academicYears->count() }}

    </div>

</div>

@stop

@section('js')

<script>

document.getElementById('searchAcademic').addEventListener('keyup',function(){

    let value=this.value.toLowerCase();

    let rows=document.querySelectorAll('#academicTable tbody tr');

    rows.forEach(function(row){

        row.style.display=row.innerText.toLowerCase().includes(value)?'':'none';

    });

});

</script>

@stop