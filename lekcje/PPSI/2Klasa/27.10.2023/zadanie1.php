<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dupa</title>
</head>
<body>
    <?php
    
    // $liczby = array(2,5,4,7,1,9,3,4,5,8);
    
    // rsort($liczby);

    // foreach($liczby as $liczba) {
    //     echo $liczba;
    // }

    // ===========================================
    
    // $suma = 0;
    // foreach($liczby as $liczba) {
    //     $suma += $liczba;
    // }
    // echo $suma;

    // ===========================================

    // $czlowiek = array('pesel' => '08201030',
    //                   'imie' => 'Marian',
    //                   'nazwisko' => 'Kowalski',
    //                   'waga' => '83',
    //                   'wzrost' => '193');
    // foreach($czlowiek as $key => $value) {
    //     echo $key."=".$value."<br>";
    // }

    // ====================1====================

    $tab1 = array(7,3,1,10,9,5,4,10,3,2,34);

    $tab1[5] = 12;

    $tab2 = array_replace($tab1);
    $tab3 = array();

    for($a=0;$a<count($tab1);$a++) {
        $zmienna = $tab1[$a] + $tab2[$a];
        $tab3[$a] = $zmienna;
    }
    // foreach($tab3 as $a) {
    //     echo $a . "<br>";
    // }

    array_reverse($tab1);
    $tab2 = array_replace($tab1);
    
    ?>
</body>
</html>