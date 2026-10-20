<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping the rooms</title>
</head>
<body>
    <?php
        echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        for ($i = 1; $i <= 10; $i++) {
            $hasil = 7 * $i;
            echo "7 x $i = $hasil <br>";
        }
        echo "<br>";

        
        $n = 5;
        while ($n > 0) {
            echo "$n ";
            $n--;
        }
        
        echo "Mulai! :D <br><br>";
        $keranjang = ["Indomie", "Teh Pucuk", "Kopi", "Roti", "Susu Kotak"];
        $no = 1;
        foreach ($keranjang as $barang) {
            echo "$no. $barang <br>";
            $no++;
        }
        echo "<br>";

        foreach (range(1, 10) as $angka) {
            echo "$angka ";
        }
        echo "<br><br>";
    ?>
</body>
</html>