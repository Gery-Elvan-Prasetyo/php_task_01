<?php 
$latihan = [
    1 => ["file" => "01_halo.php", "judul" => "1. Print"],
    2 => ["file" => "02_variabel.php", "judul" => "2. Variabel"],
    3 => ["file" => "03_tipe_data.php", "judul" => "3. Tipe Data"],
    4 => ["file" => "04_operator.php", "judul" => "4. Operator"],
    5 => ["file" => "05_percabangan.php", "judul" => "5. Percabangan"],
    6 => ["file" => "06_perulangan.php", "judul" => "6. Perulangan"],
    7 => ["file" => "07_mesin_kasir.php", "judul" => "7. Mesin Kasir Digital"],
    8 => ["file" => "08_latihan_bebas.php", "judul" => "8. Kalkulator Uang Jajan"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KasirQu</title>
</head>
<body>
<h1>halo gais, david disini</h1>
      <div class="grid">
      <?php
      foreach ($latihan as $nomor => $item) {
          echo '<a class="nav-card" href="' . $item["file"] . '">';
          echo '  <h3>' . $item["judul"] . '</h3>';
          echo '</a>';
      }
      ?>
    </div>
</body>
</html>
