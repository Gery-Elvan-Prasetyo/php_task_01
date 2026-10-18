<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warwart ;3</title>
</head>
<body>
    <?php
        echo"kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        echo "<h3>welkam tu uhhh* warung!</h3>";

        $nama = "Neeeru";
        $uang = 150000;

        $barang = ["windows", "linux", "macos"];
        $harga = [15000, 20000, 30000];

        $total = 0;

        echo "nama pembeli : $nama <br>";
        echo "uang dibawa : $uang <br><br>";
        echo "<b>daftar belanjaan :</b> <br>";
 
        foreach (range(0, 2) as $i) {
            $jumlah = random_int(1, 3);
            $subtotal = $harga[$i] * $jumlah;
            $total = $total + $subtotal;

            echo "barang : " . $barang[$i] . " <br>";
            echo "harga satuan : " . $harga[$i] . " <br>";
            echo "jumlah beli : $jumlah <br>";
            echo "subtotal : $subtotal <br><br>";
        }

        echo "total belanja awal : $total <br>";

        if ($total >= 100000) {
            $diskon = $total * 10 / 100;
            echo "status diskon : dapat diskon 10% :D <br>";
        } 
        elseif ($total >= 50000 and $total < 100000) {
            $diskon = $total * 5 / 100;
            echo "status diskon : dapat diskon 5% :) <br>";
        } 
        else {
            $diskon = 0;
            echo "status diskon : belum dapat diskon :/ <br>";
        }

        $totalbayar = $total - $diskon;
        $kembalian = $uang - $totalbayar;

        echo "potongan diskon : $diskon <br>";
        echo "total yang harus dibayar : $totalbayar <br><br>";

        $statusuang = $uang >= $totalbayar;

        switch ($statusuang) {
            case true:
                echo "status pembayaran : lunas! kembalian anda : $kembalian :D <br>";
                break;
            case false:
                echo "status pembayaran : uang kurang :c <br>";
                break;
        }
    ?>
</body>
</html>