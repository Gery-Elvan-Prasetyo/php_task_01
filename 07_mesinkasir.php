<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 
    $barang = ["indomie", "teh pucuk", "kopi", "roti"];
    $harga = [3500, 4000, 2500, 15000];
    $qty = [2, 3, 4, 1];
    $subtotal = [];
    $diskon = 5;
    $cashaing = 50000;

    // hitung subtotal
    for ($i = 0; $i < count($harga); $i++) {
        $subtotal[$i] = $harga[$i] * $qty[$i];
    }

    $tobel = array_sum($subtotal);
    $hd = $tobel * ($diskon / 100);
    $totalb = $tobel - $hd;
    $balik = $cashaing - $totalb;

    // print semua

    ?>
</body>

</html>