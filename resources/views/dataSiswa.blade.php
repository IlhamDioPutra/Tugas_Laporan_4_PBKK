<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ini adalah halaman untuk menampilkan data Siswa -->
    <title>Daftar siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <!-- Membuat tabel agar ada garisnya dengan menggunakan border dan isi teks dengan border ada jarak
         menggunakan cellpadding dan cellspacing 0 agar antar kolom atau data di garisnya tidak ada space-->
<table border="1" cellpadding="10" cellspacing="0">
    <!-- Menggunaakan thead karena disini tabel baris pertama akan bercetak tebal karena berisi nama nama kolom data yaitu kolom Nama
            Siswa, kolom Kelas siswa dan kolom Umur siswa-->
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
             <!-- Berikut adalah represntasi data yang dimasukkan ke dalam data siswa dan karena belum menggunakan database maka dimasukkan secara
                 manual, dan juga karena kolom yang diisi bukan nama kolom tapi ini adalah isi dari kolom maka tidak perlu menggunakan thead -->
                <tr>
                    <td>Muhammad Irfan</td>
                    <td>12</td>
                    <td>17 Tahun</td>
                </tr>
                <tr>
                    <td>Arief Satrio Budi Prasojo</td>
                    <td>12</td>
                    <td>17 Tahun</td>
                </tr>
                <tr>
                    <td>Fadzli Muhammad</td>
                    <td>12</td>
                    <td>17 Tahun</td>
                </tr>
        </tbody>
    </table>

    
</body>
</html>