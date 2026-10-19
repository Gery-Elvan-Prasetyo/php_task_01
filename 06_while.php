<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // for
    $f3 = 7;
    for ($nu = 1; $nu <= 10; $nu++) {
        $ff = $f3 * $nu;
        echo $ff . "\n"; 
    }
    echo "<br>\n";
    
    // while
    for ($i = 5; $i >= 1; $i--)
        while ($i >= 1) {
            echo $i-- . "\n"; // jangan lupa -- klo ga ngeleg kek td baru kejadian ^_^
        }

        // foreach
    $basket = ["indomie", "teh pucuk", "kopi", "roti","nail"]; // nail saya beli
    foreach ($basket as $keranjang)
        {
            var_dump("keranjang : $keranjang". "<br>");
        }

        // challenge
        $angka = [1,2,3,4,5,6,7,8,9,10];
        foreach ($angka as $numbah)
            {
                echo "angka : $numbah,". " ";
            }
    ?>

</body>

</html>