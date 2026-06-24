<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Sekolah</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
        }

        .navbar {
            height: 60px;
            background: #b91c1c;
            color: white;
            display: flex;
            align-items: center;
            padding: 0 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            display: flex;
            min-height: calc(100vh - 60px);
        }

        .sidebar {
            width: 250px;
            background: white;
            border-right: 1px solid #ddd;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: #333;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .sidebar a:hover {
            background: #fee2e2;
        }

        .content {
            flex: 1;
            padding: 25px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        ABSENSI SISWA SMPN 9 DENPASAR
    </div>

    <div class="container">

        <div class="sidebar">

            <a href="{{ url('/admin/dashboard') }}">Dashboard</a>

            <a href="{{ route('teachers.index') }}">Data Guru</a>

            <a href="#">Data Siswa</a>

            <a href="{{ route('classes.index') }}">Data Kelas</a>

            <a href="#">Laporan</a>

        </div>

        <div class="content">

            @yield('content')

        </div>

    </div>

</body>

</html>
