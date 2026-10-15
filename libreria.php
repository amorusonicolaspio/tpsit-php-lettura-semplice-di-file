<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPSIT PHP Lettura semplice di file</title>
</head>
<body>

    <h1>TPSIT PHP Lettura semplice di file</h1>

    <?php
        $file = fopen("libri.txt", "r");

        if ($file == false) {
            exit();
        } else {
            $contatore = 0;
            while (feof($file) == false) {
                $record = fgets($file);
                $contatore++;
                echo $record . "<br>";
            }
            
            fclose($file);
        }


        echo "<p><b>Libri totali letti in libri.txt: " . $contatore . "</b></p>";
    ?>

</body>
</html>