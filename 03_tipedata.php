<?php 
$text = "Toko maju jaya";
$jumlah = 20;
$harga = 3500.00;
$stok_ada = true;
$produk = ["Indomie", "Teh Pucuk", "Kopi",1];
$array_to =["produk"=>$produk,"harga"=>$harga,"jumlah"=>$jumlah];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipedata</title>
</head>
<body>
<?php 
$text = "Toko maju jaya";
$jumlah = 20;
$harga = 3500.00;
$stok_ada = true;
$produk = ["Indomie", "Teh Pucuk", "Kopi",1];
$array_to =["produk"=>$produk,"harga"=>$harga,"jumlah"=>$jumlah];
var_dump($text, $jumlah, $harga, $stok_ada, $array_to);
?>
</body>
</html>
