<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nothing :p</title>
</head>
<body>
    <?php
    echo"kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a>";

    $answer = random_int(1, 100);
    $min = 1;
    $max = 100;

    echo "<h3>tebak huruf tapi system coba selesain :v</h3>";
    while (true) {
        $trying = random_int($min, $max); 
        echo("system thinking... : " . $trying . "<br>");
        $yoo = $trying;

        ob_flush(); //nambah delay biar ga rusak (kata google) ;v
        flush(); //nambah delay biar ga rusak (kata google);-;
        sleep(1);

        if ($yoo < $answer) {
            echo "terlalu kecil sepertinya :/ <br><br>";
            $min = $yoo + 1;
        } 
        elseif ($yoo > $answer and $yoo <= 100) {
            echo "sepertinya terlalu besar :c <br><br>";
            $max = $yoo - 1;
        } 
        else {
            echo "<h2> saya benar! :D </h2><br>";
            break;
        }
    }
    ?>
</body>
</html>

