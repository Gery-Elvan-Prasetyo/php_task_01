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
    $aura = ["luminosity", "sol", "aegis", "lotusfall"];
    $rarity = [1200000000, 00, 825000000, 320000000];
    $biome = ["none", "only admin now", "none/cyberspace half the chance", "none i guess"];
    $array_to = ["aura" => $aura, "rarity" => $rarity, "biome" => $biome];

    var_dump($array_to["aura"], $array_to["rarity"], $array_to["biome"]);
    ?>

</body>
</html>