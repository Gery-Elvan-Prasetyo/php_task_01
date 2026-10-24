<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiiiiii</title>
    <link rel="stylesheets" href="style.css">
</head>

<body>
    <?php
    // $x = 10;
    // do {
    //     echo "nilai: " . $x . "<br>";
    //     $x++;
    // } while ($x <= 12);
    
    // $k = 3;
    // for ($i = 1; $i <= 10; $i++) {
    //     $ka = $k * $i;
    //     echo $k . "x" . $i . "=" . $ka . "\n";
    // }
    // $br = [1 => "indomie", 2 => "teh pucuk", 3 => "kopi", "roti => 4"];
    // foreach ($br as $an => $barang) {
    //     print_r($an . " " . $barang . "\n");
    // }
    
    $no = 1;
    $br = ["indomie", "teh pucuk", "kopi", "roti"];
    foreach ($br as $an => $barang) {
        print_r($no . " " . $barang . "<br>\n");
        $no++;
    }
    ?>
</body>

</html>