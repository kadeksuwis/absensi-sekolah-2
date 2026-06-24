<!DOCTYPE html>
<html>

<head>
    <title>Tambah Guru</title>
</head>

<body>

    <h1>Tambah Guru</h1>

    <form method="POST" action="{{ route('teachers.store') }}">
        @csrf

        <div>
            <label>Nama Guru</label>
            <br>
            <input type="text" name="nama" required>
        </div>

        <br>

        <div>
            <label>NIP</label>
            <br>
            <input type="text" name="nip">
        </div>

        <br>

        <div>
            <label>Email</label>
            <br>
            <input type="email" name="email" required>
        </div>

        <br>

        <div>
            <label>Password</label>
            <br>
            <input type="password" name="password" required>
        </div>

        <br>

        <div>
            <label>
                <input type="checkbox" name="is_bk">
                Guru BK
            </label>
        </div>

        <div>
            <label>
                <input type="checkbox" name="is_piket">
                Guru Piket
            </label>
        </div>

        <br>

        <button type="submit">
            Simpan
        </button>

        <a href="/teachers">
            Kembali
        </a>

    </form>

</body>

</html>
