<?php 
$nilai = 92;

if ($nilai >= 90) {
    $predikat = "A";
} elseif ($nilai >= 80) {
    $predikat = "B";
} elseif ($nilai >= 70) {
    $predikat = "C";
} else {
    $predikat = "E";
}

$total_belanja = 110000;
if ($total_belanja >= 150000) {
    $diskon = 0.20 * $total_belanja;   // cihuy dapat diskon 20%
} elseif ($total_belanja >= 100000){
    $diskon = 0.15 * $total_belanja;
} else {
    $diskon = 0;                       // tidak dapat diskon
}
$bayar = $total_belanja - $diskon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan05</title>
</head>
<body>
<a class="back" href="index.php">&larr; Kembali ke halaman utama</a>
<h2>Tugas 1</h2>
      Nilai <strong><?php echo $nilai; ?></strong>
      <p>Predikat: <span class="pill ok"><?php echo $predikat; ?></span></p>
<h2>Tugas 2 dan 3</h2>
      <table>
<table border="1">
        <tr><th>Total belanja</th><td>Rp<?php echo $total_belanja; ?></td></tr>
        <tr><th>Diskon</th><td>Rp<?php echo $diskon; ?></td></tr>
        <tr><th>Yang dibayar</th><td><strong>Rp<?php echo $bayar; ?></strong></td></tr>
      </table>
</body>
</html>
