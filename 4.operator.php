<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operation zero</title>
</head>
<body>
    <?php
    echo"kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

    $x = random_int(1,10);
    $y = random_int(1,10);

    echo "nilai angka : ";
    echo $x ." ". $y. "<br>";

    echo "pertambahan : ";
    echo $x + $y. "<br>";

    echo "pengurangan : ";
    echo $x - $y. "<br>";

    echo "perkalian   : ";
    echo $x * $y. "<br>";

    echo "pembagian   : ";
    echo $x / $y. "<br>";

    ?>
</body>
</html>