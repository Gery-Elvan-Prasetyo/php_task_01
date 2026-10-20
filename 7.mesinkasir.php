<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warwart ;3</title>
</head>
<body>
    <?php
        echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        echo "<h3>welkam tu uhhh* nerumart!</h3>";
        function rupiah($angka) {
            return "Rp" . number_format($angka, 0, ",", ".");
        }

        $nama_toko   = "Nerumart";
        $nama_kasir  = "Nell :D";
        $tanggal     = date("d/m/Y H:i");
        $uang_dibayar = random_int(10000,500000);

        $belanja = [
            ["nama" => "Indomie Goreng", "harga" => 3500,  "jumlah" => random_int(1,10)],
            ["nama" => "Teh Pucuk",      "harga" => 4000,  "jumlah" => random_int(1,10)],
            ["nama" => "Kopi Sachet",    "harga" => 2500,  "jumlah" => random_int(1,10)],
            ["nama" => "Roti Tawar",     "harga" => 15000, "jumlah" => random_int(1,10)],
            ["nama" => "Susu UHT",       "harga" => 6000,  "jumlah" => random_int(1,10)],
        ];

        $total = 0;
        $barang_termahal = "";
        $harga_termahal = 0;

        echo "Toko  : $nama_toko <br>";
        echo "Kasir : $nama_kasir <br>";
        echo "Waktu : $tanggal <br><br>";

        echo "<b>Daftar Belanjaan :</b> <br>";
        $no = 1;
        foreach ($belanja as $item) {
            $subtotal = $item["harga"] * $item["jumlah"];
            $total += $subtotal;

            if ($item["harga"] > $harga_termahal) {
                $harga_termahal = $item["harga"];
                $barang_termahal = $item["nama"];
            }

            echo "$no. " . $item["nama"] . " : " . rupiah($item["harga"]) . " x " . $item["jumlah"] . " = " . rupiah($subtotal) . "<br>";
            $no++;
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
        $kembalian    = $uang_dibayar - $total_bayar;

        echo "<b>Ringkasan Pembayaran :</b><br>";
        echo "Total Belanja Awal : " . rupiah($total) . "<br>";
        echo "Status Diskon      : $status_diskon <br>";
        echo "Potongan Diskon (" . ($persen_diskon * 100) . "%) : " . rupiah($nilai_diskon) . "<br>";
        echo "Total yang Harus Dibayar : " . rupiah($total_bayar) . "<br>";
        echo "Uang Dibayar : " . rupiah($uang_dibayar) . "<br><br>";

        $statusuang = $uang_dibayar >= $total_bayar;
        switch ($statusuang) {
            case true:
                echo "Status Pembayaran : Selesai Kembalian anda : " . rupiah($kembalian) . " :D <br>";
                break;
            case false:
                $kurang = $total_bayar - $uang_dibayar;
                echo "Status Pembayaran : Uang kurang " . rupiah($kurang) . ":c <br>";
                break;
        }
    ?>
</body>
</html>