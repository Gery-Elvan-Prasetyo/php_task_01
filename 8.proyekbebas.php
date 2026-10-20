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

    $answer = random_int(1, 1000000);
    $min = 1;
    $max = 1000000;

    echo "<h3>tebak huruf '1 in 1 million' tapi system coba selesain :v</h3>";
    while (true) {
        $trying = random_int($min, $max); 
        echo("system thinking... : " . $trying . "<br>");
        $yoo = $trying;

        ob_flush(); //nambah delay biar ga rusak (kata google) ;v
        flush(); //nambah delay biar ga rusak (kata google);-;
        
        usleep(500000);

        if ($yoo < $answer) {
            echo "terlalu kecil sepertinya :/ <br><br>";
            $min = $yoo + 1;
        } 
        elseif ($yoo > $answer and $yoo <= 1000000) {
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

