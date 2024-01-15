<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            width: fit-content;
            margin: 0px auto;
        }
    </style>
</head>
<body>
    <?php

    // #1
    // function wyswietl() {
    //     echo "Tekst";
    // }
    // wyswietl();

    // #2
    // function wysw($komunikat) {
    //     echo $komunikat;
    //     echo "<br>";
    // }
    // wysw("Lorem ipsum");
    // // echo "<br>"; // mozna w funkcji wsadzic be era
    // wysw("Dolor sit amet");
    
    // #3
    // function witaj($imie) {
    //     echo "Witaj $imie";
    //     echo "<br>";
    // }
    // witaj("Tomek");
    // witaj("Wojtek");

    // #4
    // function hampter($imie, $rasa) {
    //     echo "<h2> Mój chomik $imie chomik $rasa </h2>";
    //     echo "<br>";
    // }
    // hampter("Halina", "syryjski");
    // hampter("Gucia", "syryjski");

    // #5
    // function vat($cena_netto) {
    //     echo "Podatek: " . $cena_netto*0.23;
    //     echo "<br>";
    // }
    // vat(200);

    // #6
    // function czyParzysta($liczba) {
    //     if ($liczba % 2 == 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // $n = 23543256;
    // if (czyParzysta($n) == true) {
    //     echo "Liczba " . $n . " jest parzysta";
    // } else {
    //     echo "Liczba " . $n . " jest nieparzysta";
    // }

    // #7
    function sumo($a, $b) {
        $suma = $a + $b;
        return $suma;
    }
    function multiply($a, $b) {
        $suma = $a * $b;
        return $suma;
    }
    function divide($a, $b) {
        $suma = $a / $b;
        return $suma;
    }
    function subt($a, $b) {
        $suma = $a - $b;
        return $suma;
    }
    function mod($a, $b) {
        $suma = $a % $b;
        return $suma;
    }
    function pot($a, $b) {
        $suma = $a ** $b;
        return $suma;
    }
    function ink($a) {
        $a++;
        return $a;
    }
    function dek($a) {
        $a--;
        return $a;
    }

    echo sumo(10,26);
    echo "<br>";
    echo multiply(10,26);
    echo "<br>";
    echo divide(10,26);
    echo "<br>";
    echo subt(10,26);
    echo "<br>";
    echo mod(10,26);
    echo "<br>";
    echo pot(10,26);
    echo "<br>";
    echo ink(10);
    echo "<br>";
    echo dek(10);
    echo "<br>";

    function wynik($a,$b):int {
        return $a + $b;
    }

    echo wynik(9,17);
    ?>
</body>
</html>