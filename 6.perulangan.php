    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>looping the rooms</title>
    </head>
    <body>
        <?php
            echo"kembali ke hub : <a href='http://localhost/smk4/tugasnell/0.indexnell.php'>http://localhost/smk4/tugasnell/0.indexnell.php</a> <br> <br>";

            echo "(for) saya diajarin pak willy pak ;v <br>";
            for ($i = 6; $i >= 1; $i--) { 
                for ($j = 6; $j >= $i; $j--) { 
                    echo "*"; 
                }
                echo "<br>"; 
            }
        
            echo "<br>";

            echo "(while) kalo ini saya pake logika :p <br>";
            $i = 6; 
            while ($i >= 1) { 
                $j = 6; 
                while ($j >= $i) { 
                    echo "*"; 
                    $j--;
                }
                echo "<br>"; 
                $i--;
            }

            echo "<br>";

            echo "(for each) yang ini baca manual php dari web ;-; <br>";
            //https://www.php.net/manual/en/control-structures.foreach.php
            foreach (range(6, 1) as $i) { 
                foreach (range(6, $i) as $j) { 
                    echo "*"; 
                }   
                echo "<br>"; 
            }
        ?>

    </body>
    </html>