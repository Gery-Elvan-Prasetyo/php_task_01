<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the golden boughs</title>
</head>
<body>
    <?php
        echo"kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

        $X = random_int(1,10);
        $Y = random_int(1,10);
        
        echo "X = ". $X. " Y = ". $Y ."<br><br>";
        echo "ini pake if/else dan variabel x:D <br>";

        if ($X % 2== 0) {
            echo "Genap <br><br>";
        }

        else {
            echo "Ganjil <br><br>";
        }

        echo "ini pake switch dan variabel y :D <br>";
        switch ($Y % 2) {
        case 0:
            echo "Genap <br><br>";
            break;
        case 1 or -1:
            echo "Ganjil <br><br>";
            break;
        }
    ?>
</body>
</html>