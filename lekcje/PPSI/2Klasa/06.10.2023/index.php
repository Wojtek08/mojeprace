<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $tb[]=17;
    $tb[]=14;
    $tb[]=15;
    $tb[]=20;
    $tb[]=8;
    $tb[]=7;
    $tb[]=3;
    $tb[]=6;
    $tb[]=2;
    $tb[]=19;
    $tb[]=8;
    $tb[]=4;
    $tb[]=5;
    
    for($x=0,$cnt=count($tb);$x<$cnt;$x++) {
        echo $tb[$x];
        echo "<br>";
    }

    $tb2["dupa"] = "stół";
    $tb2["dupa2"] = "stół2";
    $tb2["dupa3"] = "stół3";

    foreach ($tb as $klucz => $wartość) {
        echo "$klucz => $wartość<br>";
    }

    $pracownicy = array (
        "szef" => "Nowak",
        "sekretariat" => "Kowalski",
        "biuro" => "Barański",
    );

    echo $pracownicy["szef"];
    echo "<br><br>";

    $number = [4,5,9,1,2,6];
    sort($number);

    for($x=0;$x<count($number);$x++) {
        echo $number[$x];
        echo "<br><br>";
    }
    
    $cars = ["Volvo","Mercedes","Toyota"];
    sort($cars);

    for($x=0;$x<count($cars);$x++) {
        echo $cars[$x];
    }

    echo "<br><br>";

    $imiona = array("Marysia","Czarek","Andrzej","Radek","Zenek");

    foreach($imiona as $imie) {
        echo $imie."<br>";
    }





    $liczby = array(5,6,1,9,32,6,123,96,57,3,46,82);
    $suma = 0;

    foreach($liczby as $liczba) {
        $suma += $liczba;
    }

    echo $suma;
    echo "<br><br>";

    $liczbyLosowe = array();
    for($i=0;$i<60;$i++) {
        $liczba = rand(1,50);
        echo $liczba." ";
    }

    $ludzie = array("Dawid"=>27,"Anna"=>17,"Marek"=>34);

    $ludzie["Dawid"]=36;

    ?>
</body>
</html>