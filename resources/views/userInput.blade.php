<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data Mahasiswa</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class = "container">
        <h1>Input data Mahasiswa</h1>
        <form action="userInput" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Masukan Nama Mahasiswa">
            </div>

            <div class="mb-3">
                <input type="text" id="NIM" name="NIM" class="form-control" placeholder="Masukan NIM Mahasiswa">
            </div>

            <button class = "btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
