<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hewwo wowwd >:3</title>
</head>
<body>
    <h1>hello world</h1>
    <?php
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

        // echo $nama." ".$umur." ".$hobi." ".$sekolah." ".$makanan." Uang Jajan Saya Sebanyak: ".$uang. "\n";

        var_dump($testarray['hallo'][2]);
    ?>
</body>
</html>