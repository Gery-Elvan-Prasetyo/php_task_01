<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nilai = 92;

    if ($nilai >= 90) {
        echo "nilai A\n";
    } elseif ($nilai >= 85) {
        echo "Nilai B\n";
    } elseif ($nilai >= 78) {
        echo "Nilai C\n";
    } else {
        echo "hellnah\n";
    }

    echo "<br>";

    $ttlblnj = 120000;
    $discount = 12000;

    if ($ttlblnj >= 120000) {
        $dibayar = $ttlblnj - $discount;
        echo $dibayar;
    } else {
        echo $ttlblnj;
    }
    ?>
</body>

</html>