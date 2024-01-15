<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// ================================================================================
    $tablica = array(7,3,1,6,9,5,4,10,3,8,4,3,6,7,3,4,22);
    foreach($tablica as $wart) {
        echo $wart."<br>";
    }
    rsort($tablica);
    echo "Maksymalny element tablicy = $tablica[0], najmniejszy = ".$tablica[count($tablica)-1]."<br>";
// ================================================================================
    $temp = 0;

    foreach($tablica as $wart2) {
        $temp += $wart2;
    }
    echo $temp/count($tablica)."<br>";
// ================================================================================
    $temp2 = 0;
    foreach($tablica as $wart3) {
        if($wart3 == 3) {
            $temp2++;
        }
    }
    echo "Ilość trójek: $temp2"."<br>";
// ================================================================================
    $temp3 = 0;
    foreach($tablica as $wart3) {
        if($wart3%2 == 0) {
            $temp3++;
        }
    }
    echo "Ilosc parzystych: $temp3, nieparzystych: ".count($tablica)-$temp3."<br>";
// ================================================================================
    $temp4 = 0;
    $temp5 = 0;
    foreach($tablica as $wart3) {
        if($wart3%2 == 0) {
            $temp4 += $wart3;
        }
        else if ($wart3%2 != 0) {
            $temp5 += $wart3;
        }
    }
    echo "Suma parzystych = $temp4, nieparzystych = $temp5";
    ?>
</body>
</html> 