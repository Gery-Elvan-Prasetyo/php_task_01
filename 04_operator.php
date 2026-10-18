<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // basic aritmatika
    $a = 10; // variable a
    $b = 3;  // variable b
    $tam = $a + $b; // ditambah
    $kur = $a - $b; // dikurang
    $kal = $a * $b; // dikali
    $bag = $a / $b; // dibagi
    $mdl = $a % $b; // sisa dari pembagian berapa

    // studi
    $nmbrg = ["indomie", "teh pucuk"];
    $hrgstn = [4000, 5000];
    $ttlbli = [5, 2];
    $ttlbyr = [];
    $total = 0;

    for ($i = 0; $i < count($nmbrg); $i++) // kenapa pakai count? klo barang nambah mlz ngubah angka
    {
        $ttlbyr[$i] = $hrgstn[$i] * $ttlbli[$i]; // kasih [$i] biar jd array yg ngarah ke array 0 dan 1
        $total += $ttlbyr[$i]; // si total ngeklaim dia itu total bayar

        echo $nmbrg[$i] . "= rp" . $ttlbyr[$i] . "\n"; // hasilnya array 0 dan 1 beserta harganya
    }
    $uangdbw = 31000; // yahahaha miskin
    $susuk = $uangdbw - $total; // sesuai nama

    echo "total belanja : $total\n"; // sisa kebawah tinggal echo doang
    echo "uang dibayar  : rp $uangdbw\n";
    echo "kembalian     : rp $susuk\n";

    if ($total % 2 == 0) // logika if else 
    {
        echo "genap";
    } else {
        echo "ganjil";
    }
    ?>
</body>

</html>