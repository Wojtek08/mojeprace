<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IF</title>
</head>
<body>
    <div>
        <?php 
        
        $t = date("H");

        if ($t < 20) {
            echo "Have a good day";
        } else {
            echo "Have a good night"; 
        };
        ?>
    </div><!--  
    --><div>
        <?php 

        $day = date("d");
        $month = date("m");
        $year = date("Y");

        echo "Date: $day.$month.$year"
        ?>
    </div>
</body>
</html>