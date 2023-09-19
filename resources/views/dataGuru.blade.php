<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ini adalah halaman untuk menampilkan data guru -->
    <title>Daftar Guru</title> 
</head>
<body>
<h1>Daftar Guru</h1>
    <!-- Membuat tabel agar ada garisnya dengan menggunakan border dan isi teks dengan border ada jarak
         menggunakan cellpadding dan cellspacing 0 agar garisnya tidak ada space-->
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Menggunaakan thead karena disini tabel baris pertama akan bercetak tebal karena berisi nama nama kolom data yaitu kolom Nama
            Guru, kolom Mata Pelajaran yang diampuh dan kolom Pengalaman -->
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Pengalaman</th>
            </tr>
        </thead>
        <tbody>
            <!-- Berikut adalah represntasi data yang dimasukkan dan disini karena belum menggunakan database maka dimasukkan secara
                 manual dan karena bukan nama kolom tapi ini adalah isi data kolom maka tidak perlu menggunakan thead -->
                <tr>
                    <td>Boko Susilo</td>
                    <td>Matematika</td>
                    <td>36 Tahun</td>
                </tr>
                <tr>
                    <td>Agus Susanto</td>
                    <td>Fisika</td>
                    <td>8 Tahun</td>
                </tr>
                <tr>
                    <td>Lionel Pessi</td>
                    <td>Penjas</td>
                    <td>5 Tahun</td>
                </tr>
        </tbody>
    </table>
    
</body>
</html>