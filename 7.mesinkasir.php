<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warwart ;3</title>
</head>
<body>
    <?php
        echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br><br>";
        echo "<h3>welkam tu uhhh* nerumart!</h3>";

        function rupiah($angka) {
            return "Rp" . number_format($angka, 0, ",", ".");
        }

        $nama_toko    = "Nerumart";
        $nama_kasir   = "Nell :D";
        $tanggal      = date("d/m/Y H:i");
        $uang_dibayar = random_int(10000, 500000);

        $barang = ["Indomie Goreng", "Teh Pucuk", "Kopi Sachet", "Roti Tawar", "Susu UHT"];
        $harga  = [3500, 4000, 2500, 15000, 6000];
        $jumlah = [random_int(1, 10), random_int(1, 10), random_int(1, 10), random_int(1, 10), random_int(1, 10)];

        $total = 0;
        $barang_termahal = "";
        $harga_termahal  = 0;

        echo "Toko  : $nama_toko <br>";
        echo "Kasir : $nama_kasir <br>";
        echo "Waktu : $tanggal <br><br>";

        echo "<b>Daftar Belanjaan :</b> <br>";
        for ($i = 0; $i < count($barang); $i++) {
            $subtotal = $harga[$i] * $jumlah[$i];
            $total += $subtotal;

            if ($harga[$i] > $harga_termahal) {
                $harga_termahal  = $harga[$i];
                $barang_termahal = $barang[$i];
            }

            $no = $i + 1;
            echo "$no. $barang[$i] : " . rupiah($harga[$i]) . " x $jumlah[$i] = " . rupiah($subtotal) . "<br>";
        }
        echo "<br>";

        echo "Barang paling mahal di struk : $barang_termahal (" . rupiah($harga_termahal) . ")<br><br>";

        if ($total >= 100000) {
            $persen_diskon = 0.15;
            $status_diskon = "Dapat diskon 15% (karena belanja >= Rp100.000)";
        } elseif ($total >= 50000) {
            $persen_diskon = 0.10;
            $status_diskon = "Dapat diskon 10% (karena belanja >= Rp50.000)";
        } elseif ($total >= 30000) {
            $persen_diskon = 0.05;
            $status_diskon = "Dapat diskon 5% (karena belanja >= Rp30.000)";
        } else {
            $persen_diskon = 0;
            $status_diskon = "Belum dapat diskon";
        }

        $nilai_diskon = $total * $persen_diskon;
        $total_bayar  = $total - $nilai_diskon;

        echo "Ringkasan Pembayaran :<<br>";
        echo "Total Belanja Awal : " . rupiah($total) . "<br>";
        echo "Status Diskon      : $status_diskon <br>";
        echo "Potongan Diskon    : " . rupiah($nilai_diskon) . "<br>";
        echo "Total Harus Dibayar: " . rupiah($total_bayar) . "<br>";
        echo "Uang Dibayar       : " . rupiah($uang_dibayar) . "<br><br>";

        if ($uang_dibayar >= $total_bayar) {
            $kembalian = $uang_dibayar - $total_bayar;
            echo "Status Pembayaran : Selesai! Kembalian anda : " . rupiah($kembalian) . " :D <br>";
        } else {
            $kurang = $total_bayar - $uang_dibayar;
            echo "Status Pembayaran : Uang kurang " . rupiah($kurang) . " :c <br>";
        }
    ?>
</body>
</html>
