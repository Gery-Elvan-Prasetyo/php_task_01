<?php

$auras = [
    "common" => 1,
    "uncommon" => 5,
    "rare" => 25,
    "epic" => 100,
    "legendary" => 500,
    "mythic" => 1000,
    "aegis" => 825000000,
    "luminosity" => 1200000000,
    "breakthrough" => 1999999999,
    "equinox" => 2500000000,
    "monarch" => 3000000000
];

$target = "monarch";
$jumlahRoll = 0;
$hasil = "";
$luck = 5;

while ($hasil !== $target) {
    $jumlahRoll++;

    foreach ($auras as $nama => $rarity) {
        if (random_int(10, $rarity) === 10) {
            $hasil = $nama;
            break;
        }
    }
}

echo "Aura didapat: " . $hasil . "<br>";
echo "Jumlah roll: " . $jumlahRoll;
?>