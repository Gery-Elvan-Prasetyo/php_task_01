<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>types but better?</title>
</head>
<body>
    <?php
        echo "kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        $teks     = "Nerumart"; 
        $jumlah   = 20;              
        $harga    = 3500.50;          
        $stok_ada = true;            
        $produk   = ["Indomie", "Teh Pucuk", "Kopi"]; 

        echo "String: $teks <br>";
        echo "Integer: $jumlah <br>";
        echo "Float: $harga <br>";
        echo "Boolean: $stok_ada<br>";
        echo "Array Produk: $produk[0], $produk[1], $produk[2] <br><br>";

        echo "Tebakan tipe data \"16\": string<br>";
        echo "Hasil cek dengan var_dump(\"16\"): ";
        var_dump("16");
        echo "<br><br>";

        echo "Hasil var_dump(16) : ";
        var_dump(16);
        echo "<br>";
        echo "Hasil var_dump(\"16\") : ";
        var_dump("16");
        echo "<br>";
    
        $produk[] = "Roti Tawar";
        echo "<br> Array setelah ditambah 1 produk baru: <br> $produk[0], $produk[1], $produk[2], $produk[3] <br><br>";
    ?>
</body>
</html>