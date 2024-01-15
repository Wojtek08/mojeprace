<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // $tekst = "Guwno";
    // echo lcfirst($tekst)."<br>";
    // echo $pozycja = strpos($tekst, 'u');

    // zad 1
    $napis = "Lorem ipsum dolor sit amet";
    
    $napis = strtoupper($napis);
    $napis = lcfirst($napis);
    echo $napis."<br>";

    // zad 2
    $tekst2 = "  Lorem ipsum dolor sit amet  ";
    echo trim($tekst2)."<br>";
    
    // zad 3
    echo nl2br("Lorem ipsum \n dolor sit amet")."<br>";

    // zad 4
    $napis4 = "Lorem ipsum dolor ipsum sit amet ipsum";
    echo str_replace("ipsum", "coś", $napis4, $i)."<br>";

    // zad 5
    $tekst5 = "Lorem ipsum Dolor sit amet";
    echo mb_strlen($tekst5)."<br>";

    // zad 6
    echo strpos($tekst5, "ipsum")."<br>";

    // zad 7
    echo lcfirst($tekst5)."<br>";

    // zad 8
    // $tekst7 = "Lorem ipsum Dolor sit amet";
    $tekst5 = strtolower($tekst5);
    $tekst5 = ucfirst($tekst5);
    echo $tekst5."<br>";

    // zad 10
    echo ltrim($tekst2)."<br>";

    // zad 11
    echo strcmp($napis, $tekst5)."<br>";

    // zad 13
    echo substr_replace($napis, "hello", -5, 0)."<br>";

    // zad 16
    echo strtr($napis, "A", "w")."<br>";

    // zad 17
    $a = "awdawd";
    $b = "jasdnask";
    printf($a.$b)."<br>";

    // zad 18
    str_replace($napis, "DOLOR", "dolor")."<br>";


    ?>
</body>
</html>