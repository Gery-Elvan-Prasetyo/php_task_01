<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>types but better?</title>
</head>
<body>
    <?php
        echo"kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        $nama = "Nell";
        $umur = "17";
        $sekolah = "MIT";
        $hobi = "Ngegithub";

        $makanan = "La Peace";
        $uang = "1000000$";

        $uhhh = ["common", "uncommon", "natural", "rare", "divinus"];
        $hmmm = ["aegis", "seraphim", "sovereign"];
        $ohhh = ["borealis", "glitched", "projection"];
        $oushi = ["eden", "monarch", "oppression"];

        $testarray = ["1" =>$uhhh,"hallo"=>$hmmm,"true"=>$ohhh,"0.5" =>$oushi];

        echo "nama : $nama <br>";
        echo "umur : $umur <br>";
        echo "hobi : $hobi <br>";
        echo "sekolah : $sekolah <br>";
        echo "makanan : $makanan <br>";
        echo "kekayaan : $uang <br>";

        var_dump($testarray['hallo'][2]);
    ?>
</body>
</html>