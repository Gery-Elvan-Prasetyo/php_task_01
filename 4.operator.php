<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operation zero</title>
</head>
<body>
    <?php
    echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

    $nama_barang1 = "Indomie Goreng";
    $harga_satu1  = 3500;
    $jumlah_beli1 = 5; 
    $subtotal1    = $harga_satu1 * $jumlah_beli1;

    $nama_barang2 = "Teh Pucuk";
    $harga_satu2  = 3000;
    $jumlah_beli2 = 2; 
    $subtotal2    = $harga_satu2 * $jumlah_beli2;

    $total        = $subtotal1 + $subtotal2;
    $uang_dibawa  = 30000;
    $kembalian    = $uang_dibawa - $total;

    echo "Barang 1 : " . $nama_barang1 . " (" . $jumlah_beli1 . " x Rp" . $harga_satu1 . ") = Rp" . $subtotal1 . "<br>";
    echo "Barang 2 : " . $nama_barang2 . " (" . $jumlah_beli2 . " x Rp" . $harga_satu2 . ") = Rp" . $subtotal2 . "<br>";
    echo "Total Bayar : Rp" . $total . "<br>";
    echo "Uang Dibawa : Rp" . $uang_dibawa . "<br>";
    echo "Kembalian   : Rp" . $kembalian . "<br><br>";

    $sisa_bagi = $total % 2;
    if ($sisa_bagi == 0) {
        echo "Total bayar Rp$total adalah bilangan genap (karena $total % 2 = 0) :D <br>";
    } else {
        echo "Total bayar Rp$total adalah bilangan ganjil (karena $total % 2 = $sisa_bagi) :P <br>";
    }
    ?>
</body>
</html>