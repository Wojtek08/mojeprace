<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lekcja</title>
</head>

<body>
    <?php

    // #1

    // $i = 4;
    // $x = 0;
    // while ($x<20) {
    //     echo $i." ";
    //     $i+=5;
    //     $x++;
    // }

    // #2

    // $i = 3;
    // for ($x=0;$x<20;$x++) {
    //     echo $i." ";
    //     $i *= 2;
    // }

    // Tabliczka mnozenia

    echo "<table border='1'>";
    for ($i=0; $i<=10; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 10; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<td></td>";
            } elseif ($i == 0) {
                echo "<td><b>" . $j . "</b>";
            } elseif ($j == 0) {
                echo "<td><b>" . $i . "</b></td>";
            } else {
                echo "<td>" . $i * $j . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <!-- 1 -->
    <!-- Wypisz za pomoca petli while ciag 20 liczb poczawszy od 4, kazda kolejna o 5 wieksza. Liczby oddzielone od siebie spacjami -->
    <!-- 2 -->
    <!-- Wypisz za pomoca petli for ciag 20 liczb poczawszy od 3, kazda 2 razy wieksza. Liczby oddzielone od siebie spacjami -->
</body>
</html>