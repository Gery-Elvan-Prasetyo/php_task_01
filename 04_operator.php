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
    $a = 10;
    $b = 3;
    $tam = $a + $b;
    $kur = $a - $b;
    $kal = $a * $b;
    $bag = $a / $b;
    $mdl = $a % $b;

    // studi
    $nmbrg = ["indomie", "teh pucuk"];
    $hrgstn = [4000, 5000];
    $ttlbli = [5, 2];
    $ttlbyr = [];
    $total = 0;

    for ($i = 0; $i < count($nmbrg); $i++) {
        $ttlbyr[$i] = $hrgstn[$i] * $ttlbli[$i];
        $total += $ttlbyr[$i];

        echo $nmbrg[$i] . "= rp" . $ttlbyr[$i] . "\n";
    }
    $uangdbw = 31000;
    $susuk = $uangdbw - $total;

    echo "total belanja : $total\n";
    echo "uang dibayar  : rp $uangdbw\n";
    echo "kembalian     : rp $susuk\n";

    if ($total % 2 == 0) {
        echo "genap";
    } else {
        echo "ganjil";
    }
    ?>
</body>

</html>