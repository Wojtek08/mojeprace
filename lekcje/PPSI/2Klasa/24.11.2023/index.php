<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // $dir = "odczyt";
    // $pliki = scandir($dir);
    // foreach($pliki as $plik) {
    //     echo $plik;
    //     $p = $dir.'/'.$plik;
    //     if (is_dir($p)) {
    //         echo "- katalog";
    //     }
    //     if (is_file($p)) {
    //         echo "- plik";
    //     }
    // }
   
// ------------------------------------------------------------------------------------------------

    // if ($des = opendir("odczyt")) {
    //     echo "Deskryptor : $des";
    //     echo "<br>Zawartość:<br>";
    //     while (false !== ($z = readdir($des))) {
    //         echo "{$z}<br>";
    //     }
    // }

// ------------------------------------------------------------------------------------------------

    // $str = "Przykładowy wiersz tekstu.";
    // if(!$fd = fopen("tekst.txt", "w")) {
    //     echo "Nie mogę otworzyć pliku tekst.txt.";
    // } else {
    //     if(fwrite($fd, $str) === false) {
    //         echo "Wystąpił błąd. Zapis nie został dokonany";
    //     } else {
    //         echo "Ciąg został zapisany.";
    //     }
    //     fclose($fd);
    // }
    
// ------------------------------------------------------------------------------------------------

    // if(!$fd = fopen('test', 'r')) {
    //     echo("Nie mogę otworzyć pliku test.txt.");
    // } else {
    //     while(!feof($fd)) {
    //         $str = fgets($fd);
    //         echo($str);
    //     }
    //     fclose($fd);
    // }

    
    
    ?>
</body>
</html>