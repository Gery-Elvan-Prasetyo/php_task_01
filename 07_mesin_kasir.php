<?php
$nama_toko   = "Toko Maju Jaya";
$nama_kasir  = "Rani";
$tanggal     = date("d/m/Y H:i");
$uang_dibayar = 20000;

$belanja = [
    ["nama" => "Indomie Goreng", "harga" => 3500,  "jumlah" => 2],
    ["nama" => "Teh Pucuk",      "harga" => 4000,  "jumlah" => 3],
    ["nama" => "Kopi Sachet",    "harga" => 2500,  "jumlah" => 4],
    ["nama" => "Roti Tawar",     "harga" => 15000, "jumlah" => 1],
    ["nama" => "Es Marimas",     "harga" => 3000, "jumlah" => 10],
];

$total = 0;
foreach ($belanja as $item) {
    $subtotal = $item["harga"] * $item["jumlah"]; 
    $total += $subtotal;                          
}

if ($total >= 100000){
    $persen_diskon = 0.15;
}elseif ($total >= 50000) {
    $persen_diskon = 0.10;   
} elseif ($total >= 30000) {
    $persen_diskon = 0.05;   
} else {
    $persen_diskon = 0;
}

$nilai_diskon = $total * $persen_diskon;
$total_bayar  = $total - $nilai_diskon;
$kembalian    = $uang_dibayar - $total_bayar;

function rupiah(int|float $angka): string {
    return "Rp" . number_format($angka, 0, ",", ".");
}    
    $barang_termahal = $belanja[0]; // anggap dulu barang pertama yang paling mahal
foreach ($belanja as $item) {
    if ($item["harga"] > $barang_termahal["harga"]) {
        $barang_termahal = $item;
    }     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan07</title>
</head>
<body>
          <h2>Keranjang Belanja</h2>
      <table>
<table border="1">
        <tr><th>No</th><th>Barang</th><th>Harga</th><th>Qty</th><th>Subtotal</th></tr>
        <?php
        $no = 1;
        foreach ($belanja as $item) {
            $subtotal = $item["harga"] * $item["jumlah"];
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $item["nama"] . "</td>";
            echo "<td>" . rupiah($item["harga"]) . "</td>";
            echo "<td>" . $item["jumlah"] . "</td>";
            echo "<td>" . rupiah($subtotal) . "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
      </table>
      <h2>Ringkasan Pembayaran</h2>
      <table>
<table border="1">
        <tr><th>Total belanja</th><td><?php echo rupiah($total); ?></td></tr>
        <tr><th>Diskon (<?php echo ($persen_diskon * 100); ?>%)</th><td>- <?php echo rupiah($nilai_diskon); ?></td></tr>
        <tr><th>Total bayar</th><td><strong><?php echo rupiah($total_bayar); ?></strong></td></tr>
        <tr><th>Uang dibayar</th><td><?php echo rupiah($uang_dibayar); ?></td></tr>
        <tr><th>Kembalian</th><td>
          <?php if ($kembalian >= 0): ?>
            <span class="pill ok"><?php echo rupiah($kembalian); ?></span>
          <?php else: ?>
            <span class="pill no">Uang kurang <?php echo rupiah(-$kembalian); ?></span>
          <?php endif; ?>
        </td></tr>
      </table>
<table>
   <tr>
        <th>Barang Termahal</th>
        <td>
            <?php echo $barang_termahal["nama"] . " sebesar " . rupiah($barang_termahal["harga"]);
  ?>
        </td>
    </tr>
  ──────
</table>
</body>
</html>
