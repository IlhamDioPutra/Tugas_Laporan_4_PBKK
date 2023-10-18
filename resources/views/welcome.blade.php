<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Menampilkan tampilan selamat datang dan link penggunakan bootstrap --}}
    <title>Selamat Datang di Sistem Manajemen Informatika</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            {{-- Teks berisikan informasi --}}
            <h1>Selamat Datang di Sistem Manajemen Informatika</h1>
            <p>Selamat datang di portal.</p>
            <p>Ini adalah tempat untuk mengakses informasi Informatika UNIB</p>
        </div>

        <div class="text-center mt-4">
            {{-- 2 buah button yang mengarahkan ke data mahasiswa dan satu lagi mengarah ke data Dosen --}}
            <a href="/mahasiswa" class="btn btn-primary mr-3">Data Mahasiswa</a>
            <a href="/dataGuru" class="btn btn-primary">Data Dosen</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
