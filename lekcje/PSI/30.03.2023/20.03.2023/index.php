<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operatory</title>
</head>
<body>
    <?php 
    
    $x = 10; $y = 6;
    $suma = $x + $y;
    $roznica = $x - $y;
    $iloczyn = $x * $y;
    $iloraz = $x / $y;
    $reszta = $x % $y;
    
    echo "Suma $x i $y wynosi $suma <br>";
    echo "Roznica $x i $y wynosi $roznica <br>";
    echo "Iloczyn $x i $y wynosi $iloczyn <br>";
    echo "Iloraz $x i $y wynosi $iloraz <br>";
    echo "Reszta z dzielenia $x i $y wynosi $reszta <br>";

    $z = 10;
    $z += 100;
    echo $z . "<br>";

    $t = 50;
    $t -= 25;
    echo $t . "<br>";

    $z -= 100;
    $z *= 2.5;
    echo $z . "<br>";

    $y /= 15;
    echo $y . "<br>";

    $y %= 6;
    echo $y . "<br>";

    var_dump($t == $z);
    echo "<br>";
    var_dump($t === $z);
    echo "<br>";

    var_dump($t != $z);
    echo "<br>";
    var_dump($y <> $z);
    echo "<br>";

    var_dump($t !== $z);
    echo "<br>";
    var_dump($t > $z);
    echo "<br>";

    var_dump($t < $z);
    echo "<br>";
    var_dump($t <= $z);
    echo "<br>";

    var_dump($t >= $z);
    echo "<br>";

    if ($x == 100 or $y == 0) {
        echo "Hello World!!11!!1!1";
    }

    if ($x == 100 && $y == 0) {
        echo "Hello World!!11!!1!1";
    }

    if ($x == 100 || $y == 0) {
        echo "Hello World!!11!!1!1";
    }

    if ($x !== 0) {
        echo "Hello World!!11!!1!1";
    }

    if ($y != 25) {
        echo "Hello World!!11!!1!1";
    }

    echo "<br>";
    echo --$x


    ?>
</body>
</html>