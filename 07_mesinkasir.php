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
    $harga = [15000, 4000, 2500, 15000];
    $qty = [2, 3, 4, 1];
    $subtotal = [];
    $diskon = 5;
    $cashaing = 200000;

    // nambah barang tugas 1
    $barang[] = "susu";
    $harga[] = 20000;
    $qty[] = 2;

    // hitung subtotal 
    for ($i = 0; $i < count($harga); $i++) {
        $subtotal[$i] = $harga[$i] * $qty[$i];  // 1. membuat menghitung subtotal otomatis
    }

    $tobel = array_sum($subtotal);
    $hd = $tobel * ($diskon / 100);
    $totalb = $tobel - $hd; // 1. diskon otomatis 
    $balik = $cashaing - $totalb; // 1. kembalian otomatis

    // belanja diatas 100000 tugas 2
    if ($totalb > 100000)
        {
        $diskon = 15;
        }
    else
        {
            $diskon - 5;
        }

        // kalau uang kurang tugas 3
    if ($cashaing >= $totalb)
        {
            echo "berhasil bayar";
        }
    else
    {
        echo "uang tidak mencukupi";
    }

    // harga termahal
    $mahal = max($harga);
    $indexS = array_search($mahal, $harga);
    echo "barang paling mahal : "; print_r($indexS);
    echo " - Rp" . number_format($mahal, 0, ',', '.');
    echo "\n";
    echo "<br>";
    
    // print semua
    echo "total belanja : "; print_r($tobel); // berubah
    echo "\n";
    echo "<br>";
    echo "diskon ($diskon %) : ";print_r($hd); // berubah
    echo "\n";
    echo "<br>";
    echo "total bayar : ";print_r($totalb); // berubah
    echo "\n";
    echo "<br>";
    echo "uang dibayar : ";print_r($cashaing);
    echo "\n";
    echo "<br>";
    echo "kembalian : ";print_r($balik);
    echo "\n";
    echo "<br>";
    
    // harga termahal tugas 4
    $mahal = max($harga);
    $indexS = array_search($mahal, $harga);
    echo "barang paling mahal : "; echo $barang[$indexS];
    echo " - Rp" . number_format($mahal, 0, ',', '.');
    echo "\n";
    echo "<br>";

    


    ?>
</body>

</html>