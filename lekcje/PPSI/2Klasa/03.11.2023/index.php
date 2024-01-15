<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $nazwisko = "<br>Tereszkiewicz";
    $tekst = <<< id
    Aneta $nazwisko
    id;
    echo $tekst;

    $nazwisko1 = "Tereszkiewicz";
    $tekst1 = <<<'id'
    <br> Aneta $nazwisko1
    id;
    echo $tekst1;
    
    ?>
</body>
</html>