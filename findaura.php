```php
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Gacha</title>
</head>

<body>

    <h1>Aura Gacha</h1>

    <?php
    // Daftar aura dan rarity dasarnya
    $auras = [
        "common" => 2,
        "uncommon" => 5,
        "rare" => 25,
        "epic" => 100,
        "legendary" => 500,
        "mythic" => 1000,
        "sovereign" => 750000000,
        "aegis" => 825000000,
        "luminosity" => 1200000000,
        "breakthrough" => 1999999999,
        "equinox" => 2500000000,
        "monarch" => 3000000000
    ];

    // Pengaturan gacha
    $target = "equinox";
    $luck = 1000;
    $maxRoll = 1000000;

    // Aura paling langka diperiksa terlebih dahulu.
    // Common menjadi hasil cadangan jika tidak ada aura lain yang berhasil.
    $aurasRoll = $auras;
    unset($aurasRoll["common"]);

    // Urutkan dari rarity terbesar ke terkecil
    arsort($aurasRoll);

    $hasil = "";
    $jumlahRoll = 0;

    // Validasi nama aura target
    if (!array_key_exists($target, $auras)) {
        echo "Aura target tidak ditemukan!";
    } else {

        // Auto-roll sampai target ditemukan atau batas tercapai
        while ($hasil !== $target && $jumlahRoll < $maxRoll) {

            $jumlahRoll++;
            $hasil = "common";

            foreach ($aurasRoll as $nama => $rarity) {

                // Luck memperkecil angka rarity efektif
                $rarityEfektif = max(
                    1,
                    (int) ceil($rarity / $luck)
                );

                // Roll aura
                $roll = random_int(1, $rarityEfektif);

                if ($roll === 1) {
                    $hasil = $nama;
                    break;
                }
            }
        }

        echo "<p>Target aura: " . htmlspecialchars($target) . "</p>";
        echo "<p>Luck: " . $luck . "x</p>";
        echo "<p>Jumlah roll: " . number_format($jumlahRoll) . "</p>";

        if ($hasil === $target) {
            echo "<h2>Berhasil mendapatkan: "
                . htmlspecialchars($hasil)
                . "!</h2>";
        } else {
            echo "<h2>Batas roll tercapai!</h2>";
            echo "<p>Aura terakhir: "
                . htmlspecialchars($hasil)
                . "</p>";
            echo "<p>Target belum didapat. Coba lagi nanti.</p>";
        }
    }
    ?>

</body>

</html>
```