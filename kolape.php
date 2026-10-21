<?php
$buku = ["filosofi teras", "holy mother", "bandung menjelang pagi"];
$harga = [109000, 109000, 110000];
$qty = [1, 1, 4];
$subtotal = [];

for ($i = 0; $i < count($harga); $i++) {
    $subtotal[$i] = $harga[$i] * $qty[$i];
}
// print_r($subtotal);
// print_r(array_sum($subtotal)); echo "\n";
// print_r(max($subtotal));

print_r($buku);
print_r($harga);
?>