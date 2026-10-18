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
    $teks = "Sol's RNG";
    $iden = 20;
    $ag = 370.000;
    $aura = ["luminosity", "sol", "aegis", "lotusfall", "pixelation"]; // menambhakan pixelation hasilnya ada array ke 4
    $rarity = [1200000000, 00, 825000000, 320000000];
    $biome = ["none", "only admin now", "none/cyberspace half the chance", "none i guess"];
    $array_to = ["aura" => $aura, "rarity" => $rarity, "biome" => $biome];

    // perbandingab
    var_dump(16). PHP_EOL; // menjadi int
    var_dump("16"). PHP_EOL; // menjadi string p
    echo "<br>";
    var_dump($array_to["aura"], $array_to["rarity"], $array_to["biome"]);
    ?>

</body>
</html>