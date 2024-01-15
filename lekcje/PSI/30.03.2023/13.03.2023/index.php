<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13.03.2023</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $x = 9;
    $y = 10;
    $tytul = "turiipipip IP TURI IP IP SELEMENARADIO ";
    print("moja ulubiona piosenka to $tytul zespolu $tytul<br>");
    echo "moja ulubiona piosenka to ".$tytul." zespolu ".$tytul."<br>";
    echo $x + $y."<br><br>";

    $zst = "ZST";
    echo "I love ".$zst."<br><br>";

    $turi = true;
    var_dump($turi);
    echo "<br><br>";

    $int = 12311;
    var_dump($int);
    echo "<br><br>";

    $potwojejpysznejzupie = 123.11;
    var_dump($potwojejpysznejzupie);
    echo "<br><br>";

    $string = "hello world :D :D :D :D :D :D :D :D :D :D :D :D :D";
    var_dump($string);
    echo "<br><br>";

    $nazw = "Mazur";
    $sratatata=<<<id
    Wojtek $nazw
    id;
    echo $sratatata;
    
    $nazw2 = "Mazur";
    $sratatata2=<<<'id'
    Wojtek $nazw2
    id;
    echo $sratatata2;
    
    echo "<br>";
    $tablica = array("sra", "lala", "K19191");
    var_dump($tablica);
    echo "<br><br>";

    // public $kolor = "zielony";
    // public $nazwa = "ogorek";

    // public function napisz(string $napis) {
    //     echo $napis.'<br>';
    // }
    
    // $warzywo = new Warzywa();
    // echo $warzywo->napisz("Bardzo lubie warzywa. Sa zdrowe.");
    // echo $warzywo->nazwa.'<br>';
    // echo $warzywo->kolor.'<br>';
    // $warzywo->nazwa = "marchewka";
    // $warzywo->kolor = "pomaranczowy";
    // echo $warzywo->nazwa.'<br>';
    // echo $warzywo->kolor.'<br>';

    // define('LANGUAGE', 'PHP'); echo LANGUAGE;
    const LANGUAGE = 'PHP'; echo LANGUAGE;
    /*ASNJDKASNDJ
    AJSNKDJASDNJK
    ASKJDNAJD*/

    ?>
</body>
</html>