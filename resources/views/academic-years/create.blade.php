@extends('adminlte::page')

@section('title', 'Tambah Tahun Ajaran')

@section('content_header')

    <div class="d-flex justify-content-between">

        <div>

            <h1>

                <i class="fas fa-calendar-plus text-danger"></i>

                Tambah Tahun Ajaran

            </h1>

            <small class="text-muted">

                Tambahkan Tahun Ajaran Baru

            </small>

        </div>

        <div>

            <a href="{{ route('academic-years.index') }}" class="btn btn-secondary">

                <i class="fas fa-arrow-left"></i>

                Kembali

            </a>

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


    <div class="card card-danger card-outline">

        <div class="card-header">

            <h3 class="card-title">

                Form Tahun Ajaran

            </h3>

        </div>

        <form action="{{ route('academic-years.store') }}" method="POST">

            @csrf

            <div class="card-body">

                <div class="form-group">

                    <label>

                        Tahun Awal

                    </label>

                    <select name="start_year" id="start_year" class="form-control" required>

                        <option value="">

                            -- Pilih Tahun --

                        </option>

                        @for ($i = date('Y') - 2; $i <= date('Y') + 10; $i++)
                            <option value="{{ $i }}" {{ old('start_year') == $i ? 'selected' : '' }}>

                                {{ $i }}

                            </option>
                        @endfor

                    </select>

                </div>

                <div class="form-group">

                    <label>

                        Preview Tahun Ajaran

                    </label>

                    <input type="text" id="preview" class="form-control" readonly>

                </div>

                <div class="form-group">

                    <div class="custom-control custom-switch">

                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1">

                        <label class="custom-control-label" for="is_active">

                            Jadikan Tahun Ajaran Aktif

                        </label>

                    </div>

                </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-danger">

                    <i class="fas fa-save"></i>

                    Simpan

                </button>

                <a href="{{ route('academic-years.index') }}" class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

@stop


@section('js')

    <script>
        const start = document.getElementById('start_year');

        const preview = document.getElementById('preview');

        function updatePreview() {

            if (start.value) {

                preview.value = start.value + '/' + (parseInt(start.value) + 1);

            } else {

                preview.value = '';

            }

        }

        start.addEventListener('change', updatePreview);

        updatePreview();
    </script>

@stop
