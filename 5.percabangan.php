<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the golden boughs</title>
</head>
<body>
    <?php
        echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";
        
        $nilai = random_int(50,100);
        if ($nilai >= 90) {
            $predikat = "A (Luar biasa)";
        } elseif ($nilai >= 80) {
            $predikat = "B (Bagus)";
        } elseif ($nilai >= 70) {
            $predikat = "C (Cukup)";
        } else {
            $predikat = "D (Perlu belajar lagi)";
        }
        echo "Jika Nilai = $nilai -> Predikat: $predikat<br>";

        $total_belanja = random_int(75000,250000); 

        if ($total_belanja > 150000) {
            $persen_diskon = 0.20;
            $keterangan = "Dapat diskon 20% (karena belanja di atas Rp150.000)";
        } elseif ($total_belanja >= 100000) {
            $persen_diskon = 0.15;
            $keterangan = "Dapat diskon 15% (karena belanja Rp100.000 - Rp150.000)";
        } else {
            $persen_diskon = 0;
            $keterangan = "Tidak dapat diskon";
        }

        $diskon = $total_belanja * $persen_diskon;
        $bayar  = $total_belanja - $diskon;

        echo "Total : Rp$total_belanja <br>";
        echo "Keterangan    : $keterangan <br>";
        echo "Diskon (" . ($persen_diskon * 100) . "%) : Rp$diskon <br>";
        echo "Terbayar  : Rp$bayar <br><br>";

        $hari = "Rabu";
        switch ($hari) {
            case "Senin":
                $status = "Awal pekan, semangat!";
                break;
            case "Rabu":
                $status = "Pertengahan pekan, tetap fokus!";
                break;
            case "Jumat":
                $status = "Hampir libur!";
                break;
            default:
                $status = "Hari biasa.";
        }
        echo "Hari $hari: $status <br>";
    ?>
</body>
</html>