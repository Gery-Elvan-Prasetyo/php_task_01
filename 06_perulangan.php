<?php

$keranjang = ["Indomie", "Teh Pucuk", "Kopi", "Roti", "Bakso"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan06</title>
</head>
<body>
<h2>Tugas 1</h2>
    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $hasil = 7 * $i;
            echo "<tr><td>7 x $i</td><td>=</td><td><strong>$hasil</strong></td></tr>";
        }
        ?>
</table> 
<h2>Tugas 2</h2>
      <table>
<table border="1">
        <tr><th>No</th><th>Nama barang</th></tr>
        <?php
        $no = 1;
        foreach ($keranjang as $barang) {
            echo "<tr><td>$no</td><td>$barang</td></tr>";
            $no++;
        }
        ?>
      </table>
<h2>Tugas 3</h2>
<?php
foreach (range(1, 10) as $angka) {
    echo $angka . " ";
}
?>
</body>
</html>
