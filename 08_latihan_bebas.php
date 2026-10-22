<?php
$uang_awal = 50000;

$pengeluaran = [
  "Senin" => 10000,
  "Selasa" => 12000,
  "Rabu" => 500,
  "Kamis" => 2000,
  "Jumat" => 15000,
];

$sisa = $uang_awal;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan08</title>
</head>
<body>
<?php 
echo "Uang awal: Rp " . number_format($uang_awal, 0, ',', '.') . "<br><br>";

foreach ($pengeluaran as $hari => $biaya) {
    $sisa -= $biaya;
    echo "$hari: -Rp " . number_format($biaya, 0, ',', '.')
       . " (sisa: Rp " . number_format($sisa, 0, ',', '.') . ")<br>";
}
echo "<br><strong>Sisa uang jajan: Rp " . number_format($sisa, 0, ',', '.') . "</strong>";
?>
</body>
</html>
