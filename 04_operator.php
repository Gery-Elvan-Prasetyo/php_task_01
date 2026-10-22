<?php
$nama_barang = "Indomie Goreng";
$harga_satu  = 3500;
$jumlah_beli = 5;
$nama_barang2 = "Sprite";
$harga_satu2 = 6000;
$jumlah_beli2 = 2;
$total       = $harga_satu * $jumlah_beli;   // perkalian
$total2 = $harga_satu2 * $jumlah_beli2;
$total_semua = $total + $total2;
$uang_dibawa = 50000;
$kembalian   = $uang_dibawa - $total_semua;        // pengurangan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan04</title>
</head>
<body>
<a class="back" href="index.php">&larr; Kembali ke halaman utama</a>
<h2>Tugas 1 dan 2</h2>
      <table>
<table border="1">
        <tr><th>Barang</th><td><?php echo $nama_barang; ?></td></tr>
        <tr><th>Barang 2</th><td><?php echo $nama_barang2; ?></td></tr>
        <tr><th>Harga satuan</th><td>Rp<?php echo $harga_satu; ?></td></tr>
        <tr><th>Harga satuan 2</th><td>Rp<?php echo $harga_satu2; ?></td></tr>
        <tr><th>Jumlah beli</th><td><?php echo $jumlah_beli; ?></td></tr>
        <tr><th>Jumlah beli 2</th><td><?php echo $jumlah_beli2; ?></td></tr>
        <tr><th>Total bayar</th><td>Rp<?php echo $total; ?></td></tr>
        <tr><th>Total bayar 2</th><td>Rp<?php echo $total2; ?></td></tr>
        <tr><th>Total semua</th><td>Rp<?php echo $total_semua; ?></td></tr>
        <tr><th>Uang dibawa</th><td>Rp<?php echo $uang_dibawa; ?></td></tr>
        <tr><th>Kembalian</th><td>Rp<?php echo $kembalian; ?></td></tr>
      </table>
<h2>Tugas 3</h2>
<pre>&lt;?php echo $total % 2; ?&gt;</pre>
Hasilnya: 
<pre><?php echo $total % 2; ?></pre>
</body>
</html>
