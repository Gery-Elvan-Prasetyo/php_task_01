<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $auras = ["common" => 2, "uncommon" => 5, "rare" => 25, "epic" => 100, "legendary" => 500, "mythic" => 1000, "aegis" => 825000000, "luminosity" => 1200000000, "breakthrough" => 1999999999];
    $hasil = [];

    foreach ($auras as $aa => $rarity) {
        if (random_int(1, $rarity) === 1) {
            $hasil[] = $aa;
        }
    }

    if (count($hasil) > 0)
    {
        echo "aura yg didapat : <br>";
        foreach ($hasil as $aurah) {
            echo $aurah . "<br>";
        }
    } 
    else 
    {
        echo "nothinh";
    }
// $target = "rare";
// $jumlahRoll = 0;
// $hasil = "";

// while ($hasil !== $target) {
//     $jumlahRoll++;

//     foreach ($auras as $nama => $rarity) {
//         if (random_int(1, $rarity) === 1) {
//             $hasil = $nama;
//             break;
//         }
//     }
// }

// echo "Aura didapat: " . $hasil . "<br>";
// echo "Jumlah roll: " . $jumlahRoll;
    ?>
</body>

</html>