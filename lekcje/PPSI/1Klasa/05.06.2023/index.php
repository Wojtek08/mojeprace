<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php
        
        // $tablica = array (
        //     array("Volvo",22,18),
        //     array("Nissan",15,11),
        //     array("Toyota",5,2),
        //     array("Land Rover",17,15),
        // );

        // echo $tablica[0][0].": In stock: ".$tablica[0][1]."sold: ".$tablica[0][2].".<br>";
        function obliczSrednia($tablica) {
            $suma = array_sum($tablica);
            $liczbaElementow = count($tablica);

            if ($liczbaElementow > 0) {
                $srednia = $suma / $liczbaElementow;
                return $srednia;
            } else {
                return 0;
            };
        }

        $liczby = [5,10,15,20,25];
        $srednia = obliczSrednia($liczby);
        echo "Średnia: " . $srednia . "<br>";

        ?>
        <?php 
        function znajdzNajwieksza($tablica){
            $najwieksza = max($tablica);
            return $najwieksza;
        }
        $liczby = [5, 10, 15, 20, 25];
        $najwieksza = znajdzNajwieksza($liczby);
        echo "Najwięęęęęększa liczba to:". $najwieksza. "<br>";
        ?>
        <?php
        function odwrocKolejnosc ($tablica) {
            $odwroconaTablica = array_reverse($tablica);
            return $odwroconaTablica;
        }

        $liczby = [5,10,15,20,25];
        $odwrocona = odwrocKolejnosc($liczby);
        echo "Odwrotna kolejnosc: " . implode(", ", $odwrocona);
        ?>
        <?php
        function zliczWystapienia($tablica) {
            $licznik = array_count_values($tablica);
            return $licznik;
        }
        $slowa = ["japko","grużka","banananmnnmnmnanaan","japko","slifka","japko"];
        $wystapienia = zliczWystapienia($slowa);
        echo "<table>";
        echo "<tr><th>Slowo</th><th>Liczba wystapien</th></tr>";
        foreach ($wystapienia as $slowo => $liczba) {
            echo "<tr><td>$slowo</td><td>$liczba</td></tr>";
        }
        echo "</table>";
        ?>
        <?php
        function usunDuplikaty($tablica){
            $unikalne = array_unique($tablica);
            return $unikalne;
        }
        $liczby = [5, 10, 15, 10, 15, 20, 25];
        $unikalne = usunDuplikaty($liczby);
        echo "Oczyszczona tablica: ". implode(",", $unikalne)."<br>";
        ?>
        <?php
        function sortujTablice($tablica){
            sort($tablica);
            return $tablica;
        }
        $liczby = [5, 10, 15, 10, 15, 20, 25];
        $posortowane = sortujTablice($liczby);
        echo "Posortowana tablica: ". implode(",", $posortowane);
        ?>
        <?php
        ?>
    </section>
</body>
</html>