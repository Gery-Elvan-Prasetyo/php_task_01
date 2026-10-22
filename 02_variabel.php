<?php
// 1) Membuat variabel dan mengisinya.
$nama     = "Alfredo";
$umur     = 16;
$sekolah  = "SMK Negeri 4 Bandar Lampung";
$hobi     = "dengar musik";
$makanan_favorit = "Mie ayam";
$uang_jajan = 20000;

// 2) Mengambil nilai variabel dan menghitung.
$tahun_lahir = 2026 - $umur;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan02</title>
</head>
<body>
<a class="back" href="index.php">&larr; Kembali ke halaman utama</a>
    <table>
<table border="1">
        <tr><th>Label kotak</th><th>Isi</th></tr>
        <tr><td>$nama</td><td><?php echo $nama; ?></td></tr>
        <tr><td>$umur</td><td><?php echo $umur; ?> tahun</td></tr>
        <tr><td>$sekolah</td><td><?php echo $sekolah; ?></td></tr>
        <tr><td>$hobi</td><td><?php echo $hobi; ?></td></tr>
        <tr><td>hasil hitung</td><td>Tahun lahir sekitar <?php echo $tahun_lahir; ?></td></tr>
        <tr><td>$makanan_favorit</td><td><?php echo $makanan_favorit; ?></td></tr>
        <tr><td>$uang_jajan</td><td>Uang jajanku <?php echo $uang_jajan; ?></td></tr>
      </table> 
</body>
</html>
