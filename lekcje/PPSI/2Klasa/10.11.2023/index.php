<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $str = <<<ID1
    pierwszy wiersz tekstu
    drugi wiersz tekstu
    trzeci wiersz tekstu
    ID1;
    echo ("<h4>Po uzyciu funkcji nl2br:</h4>");
    echo nl2br($str);

    $wartosc = 77;

    printf("<br><br>Przy uzyciu ciagu %%b = %b <br>", $wartosc);
    printf("Przy uzyciu ciagu %%c = %c <br>", $wartosc);
    printf("Przy uzyciu ciagu %%d = %d <br>", $wartosc);
    printf("Przy uzyciu ciagu %%E = %E <br>", $wartosc);
    printf("Przy uzyciu ciagu %%f = %f <br>", $wartosc);
    printf("Przy uzyciu ciagu %%F = %F <br>", $wartosc);
    printf("Przy uzyciu ciagu %%o = %o <br>", $wartosc);
    printf("Przy uzyciu ciagu %%s = %s <br>", $wartosc);
    printf("Przy uzyciu ciagu %%u = %u <br>", $wartosc);
    printf("Przy uzyciu ciagu %%x = %x <br>", $wartosc);
    printf("Przy uzyciu ciagu %%X = %X <br><br>", $wartosc);

    $str = "przykladowy CIAG zNaKoW";

    echo "<br>ciag oryginalny: $str";
    echo "<br>strtolower: ";
    echo strtolower($str);
    echo "<br>strtoupper: ";
    echo strtoupper($str);
    echo "<br>ucfirst: ";
    echo ucfirst($str);
    echo "<br>ucwords: ";
    echo ucwords($str) . "<br><br>";

    $str = ltrim($str);
    echo "ltrim: -$str-<br>";

    $str = trim($str);
    echo "trim: -$str-<br>";

    $ile = 0;
    echo 'Ciag znakow [nazwa_miasta] dupa dupa opole dipupapa ople asda dupa opole rzeszow[nazwa_miasta]"<br><br>';
    echo str_ireplace("[nazwa_miasta]", "opole ", "[nazwa_miasta]guw no guwno nie ma to jak mieszkac w miescie [nazwa_miasta].", $ile);
    echo "<br><br><br>";

    // $teskt = "żyła sobie śliczna baba jaga";
    // $tekst = strtr($tekst, "śćążęłń", "ŚĆŁĄŚÓ");
    // echo strtoupper($tekst);

    echo '<br>strcmp(5,"5") = ' . strcmp(5, "5");

    $tekst = "<br>Rzeszuf to fajne miasto";
    echo $tekst . " -> ";
    echo substr($tekst, 9, 12);

    ?>
</body>

</html>