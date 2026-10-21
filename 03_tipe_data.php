<?php
$teks      = "Toko Maju Jaya";   // string  : kumpulan huruf/teks
$jumlah    = 20;                 // integer : bilangan bulat
$harga     = 3500.50;            // float   : bilangan desimal
$stok_ada  = true;               // boolean : benar / salah saja (true / false)
$produk    = ["Indomie", "Teh Pucuk", "Nipis Madu", "Kopi",1]; // array: daftar banyak nilai
$produk1=array("Indomie","Teh Pucuk","Kopi",1);
$array_to =["produk"=>$produk,"harga"=>$harga,"jumlah"=>$jumlah];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan03</title>
</head>
<body>
   <ul>
<li><h3>Tugas 1 dan 2</h3></li>
<pre>&lt;?php var_dump(16); var_dump("16")?&gt;</pre>
Hasilnya:
        <pre><?php var_dump(16); var_dump("16")?></pre>
Sistem akan membaca <code>var_dump(16)</code> sebagai integer, sedangkan <code>var_dump("16")</code> akan dibaca sebagai string
<li><h3>Tugas 3</h3></li>
<pre>&lt;?php var_dump($produk); ?&gt;</pre>
Hasilnya: 
<pre><?php var_dump($produk); ?></pre>
</ul>
 
</body>
</html>
