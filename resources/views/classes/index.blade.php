@extends('layouts.admin')

@section('content')
<h1>Data Kelas</h1>

<a href="{{ route('classes.create') }}">
    Tambah Kelas
</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>Nama Kelas</th>
        <th>Wali Kelas</th>
        <th>Jumlah Siswa</th>
        <th>Aksi</th>
    </tr>

    @forelse($classes as $class)
    <tr>
        <td>{{ $class->nama_kelas }}</td>

        <td>
            {{ $class->wali->nama ?? '-' }}
        </td>

        <td>
          
        </td>

        <td>
            <a href="{{ route('classes.edit', $class->id) }}">
                Edit
            </a>

            |

            <form
                action="{{ route('classes.destroy', $class->id) }}"
                method="POST"
                style="display:inline;"
            >
                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    onclick="return confirm('Yakin hapus kelas?')"
                >
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="4">
            Belum ada data kelas
        </td>
    </tr>
    @endforelse

</table>
@endsection