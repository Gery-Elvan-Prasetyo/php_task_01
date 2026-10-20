<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>types maybe</title>
</head>
<body>
    <?php 
        echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        $nama    = "Nell";
        $umur    = 17;
        $sekolah = "MIT";
        $hobi    = "Ngegithub";
        $tahun_lahir = 2026 - $umur;

        echo "Cara 1 (titik): " . "Halo, " . $nama . " :> <br>";
        echo "Cara 2 (dalam tanda kutip): Halo, $nama! >:p <br><br>";

        echo "Nama : $nama <br>";
        echo "Umur : $umur tahun (Tahun lahir sekitar $tahun_lahir)<br>";
        echo "Sekolah : $sekolah <br>";
        echo "Hobi : $hobi <br>";

        $makanan_favorit = "La Peace";
        echo "Makanan Favorit : $makanan_favorit <br>";

        $uang_jajan = 20000;
        echo "Penghasilan Harian : $uang_jajan$ <br>";

        $kekayaan = "1000000$";
        echo "Kekayaan : $kekayaan :p <br>";
    ?>
</body>
</html>