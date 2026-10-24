<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiiiiii</title>
</head>
<body>
    <?php
$nilai = random_int(1, 100);
if ($nilai > 90) {
    echo "A";
} elseif ($nilai >= 81) {
    echo "B";
} elseif ($nilai >= 71) {
    echo "C";
} elseif ($nilai >= 61) {
    echo "D";
} else {
    echo "E";
}
?>
</body>
</html>