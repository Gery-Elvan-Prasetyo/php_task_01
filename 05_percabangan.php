<?php 
$nilai = 92;

if ($nilai >= 90) {
    $predikat = "A (Luar biasa)";
} elseif ($nilai >= 80) {
    $predikat = "B (Bagus)";
} elseif ($nilai >= 70) {
    $predikat = "C (Cukup)";
} else {
    $predikat = "D (Perlu belajar lagi)";
}

$total_belanja = 120000;
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
<h2>Tugas 1</h2>
      Nilai <strong><?php echo $nilai; ?></strong>
      <p>Predikat: <span class="pill ok"><?php echo $predikat; ?></span></p>
<h2>Tugas 2 dan 3, Belanja online</h2>
      <table>
<table border="1">
        <tr><th>Total belanja</th><td>Rp<?php echo $total_belanja; ?></td></tr>
        <tr><th>Diskon</th><td>Rp<?php echo $diskon; ?></td></tr>
        <tr><th>Yang dibayar</th><td><strong>Rp<?php echo $bayar; ?></strong></td></tr>
      </table>
</body>
</html>
