<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List data Mahasiswa</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Show data mahasiswa -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ session('Nama') }}</td>
                    <td>{{ session('NIM') }}</td>
                </tr>
            </tbody>
        </table>

        <!-- tombol back ke input data mahasiswa -->
        <a href="{{ route('userInput') }}">Kembali</a>
    </div>
</body>
</html>
