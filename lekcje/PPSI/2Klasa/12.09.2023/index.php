<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
            text-align: center;
        }
        table {
            display: inline-block;
            border: 1px solid #999;
            border-collapse: collapse;
        }
        td,th {
            border: 1px solid #999,;
            padding:  5px;
        }
    </style>
</head>
<body>
    <h3>Tablice</h3>
    <?php 
    
    $tab = array("Aneta", "Marcin", "Jan");
    echo $tab[0];
    echo "<br>";
    echo $tab[1];
    echo "<br>";
    echo $tab[2];
    echo "<br>";
    
    
    ?>
</body>
</html>

<!-- <?php

// $tablica[0] = "Wpisz numer 0";
// $tablica[1] = "Wpisz numer 1";
// $tablica[2] = "Wpisz numer 2";
// echo $tablica[2];
$cars = array("audi", "tesla", "dupa", "toyota");
echo "aj lajk ".$cars[1];


?> -->