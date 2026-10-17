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
    $teks = "Toko Gery";
    $jumlah = 20;
    $harga = 3500.00;
    $stok_ada = true;
    $produk = ["indomie","teh pucuk","kopi"];
    $array_to = ["produk"=>$produk, "harga" =>$harga];
    var_dump($array_to). PHP_EOL;

    $nama = "Gery";
    $umur = 10;
    $Sekolah = "Smkn 4 bdl";
    $hobi = "chilling, memandang alam";
    $tahunlahir = 2009;
    $whenyh = 5;
    $jumlah = $tahunlahir + $whenyh;

    echo "nama : $nama \n";
    print_r("umur : $umur \n");
    var_dump("sekolah : $Sekolah \n");
    echo "hobi : $umur \n";
    echo "lahir : $tahunlahir \n";
    echo "??? : $jumlah \n";

    var_dump($array_to);
    ?>

</body>

</html>