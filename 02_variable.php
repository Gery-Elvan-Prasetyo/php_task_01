<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbul</title>
</head>

<body>
    <h1>ass</h1>
    <br>

    <?php

    $nama = "Gery"; // "" buat string
    $umur = 10; // nomor untuk integer dan float pakein "."
    $Sekolah = "Smkn 4 bdl"; // string
    $hobi = "chilling, memandang alam"; // sama aja
    $tahunlahir = 2009; // int
    $whenyh = 5; // int
    $jumlah = $tahunlahir + $whenyh; // menjumlahkan
    // menggabungkan kata
    $kata1 = "hai,"; // kata 1
    $kata2 = "aku pristel"; // kata 2
    $gabungkata = $kata1. " ". $kata2; // "." untuk menggabung variable atau string

    echo "nama : $nama \n";
    print_r("umur : $umur \n");
    var_dump("sekolah : $Sekolah \n");
    echo "hobi : $umur \n";
    echo "lahir : $tahunlahir \n";
    echo "??? : $jumlah \n";
    echo $gabungkata;

    ?>

</body>

</html>