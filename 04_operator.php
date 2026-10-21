<?php
$nama_barang = "Indomie Goreng";
$harga_satu  = 3500;
$jumlah_beli = 3;

$total       = $harga_satu * $jumlah_beli;   // perkalian
$uang_dibawa = 15000;
$kembalian   = $uang_dibawa - $total;        // pengurangan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan04</title>
</head>
<body>
      <table>
<table border="1">
        <tr><th>Barang</th><td><?php echo $nama_barang; ?></td></tr>
        <tr><th>Harga satuan</th><td>Rp<?php echo $harga_satu; ?></td></tr>
        <tr><th>Jumlah beli</th><td><?php echo $jumlah_beli; ?></td></tr>
        <tr><th>Total bayar</th><td>Rp<?php echo $total; ?></td></tr>
        <tr><th>Uang dibawa</th><td>Rp<?php echo $uang_dibawa; ?></td></tr>
        <tr><th>Kembalian</th><td>Rp<?php echo $kembalian; ?></td></tr>
      </table>
</body>
</html>
