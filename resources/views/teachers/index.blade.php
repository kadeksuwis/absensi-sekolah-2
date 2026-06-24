@extends('layouts.admin')

@section('content')
    <h1>Data Guru</h1>

    <p>
        <a href="{{ route('teachers.create') }}">
            Tambah Guru
        </a>
    </p>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>NIP</th>
            <th>BK</th>
            <th>Piket</th>
            <th>Aksi</th>
        </tr>

        @foreach ($teachers as $teacher)
            <tr>

                <td>{{ $teacher->nama }}</td>

                <td>{{ $teacher->user->email }}</td>

                <td>{{ $teacher->nip }}</td>

                <td>
                    {{ $teacher->is_bk ? 'Ya' : 'Tidak' }}
                </td>

                <td>
                    {{ $teacher->is_piket ? 'Ya' : 'Tidak' }}
                </td>
                <td>

                    <a href="{{ route('teachers.edit', $teacher->id) }}">
                        Edit
                    </a>

                    |

                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Yakin hapus guru?')">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>
@endsection
