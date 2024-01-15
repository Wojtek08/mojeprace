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
    
    // 1
    // function funkcja($a,$b):int {
    //     return $a+$b;
    // }

    // echo funkcja(3.14,13.37);
    
    // 2
    // function sum($a,$b) {
    //     return $a+$b;
    // }

    // $dodaj = "sum";
    // echo $dodaj(15,2);
    
    // 3
    // $dodaj = function ($g,$s) {
    //     return $g+$s;
    // };

    // echo $dodaj(1,19);

    // 4
    // $colors = array("red", "green", "blue", "yellow");
    // foreach ($colors as $value) {
    //     echo "$value <br>";
    // }

    // 5 NIEDOKONCZONE
    // $x_zmienna = 4;
    // function dupa() {
    //     global $y_apowdpoa;
    //     $y_apowdpoa = 13;
    //     $x_co = 90;
    // }
    // echo $x_zmienna;
    // echo $GLOBALS['y_apowdpoa'];
    // echo $x_co;
    
    // 6
    // function mojaFunkcja() {
    //     static $i = 100;
    //     echo $i.'<br>';
    //     $i-=1;
    // }
    // echo mojaFunkcja();

    // pola
    // function dupa($a,$b) {
    //     echo "Pole trójkąta o podstawie $a i wysokości $h wynosi: ".(($a*$h)/2);
    // }
    // function prostokąt($a,$b) {
    //     echo "Pole prostokąta o bokach $a i $b wynosi: ".($a*$b);
    // }
    // function trapez($a,$b,$h) {
    //     $p = (($a+$b)*$h)/2;
    //     echo "Pole trapezu o podstawach $a i $b orazy wysokości $h wynosi: ".$p;
    // }

    $day = date("Y.m.d");
    echo $day;
    $data = getdate();
    $dzien = $data["mday"];
    $miesiac = $data["mon"];
    $rok = $data["year"];

    if ($miesiac == 5) {
        echo "gunwo";
    }

    echo "<br>";

    $urodziny = date()

    ?>
    <!-- // <div style=""> -->
    <!-- //     <?php dupa(5,8); ?> -->
    <!-- // </div> -->
    <h1>
        
    </html>