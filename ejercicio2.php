<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <?php
        $n1 = 1;
        $n2 = 2;
        $n3 = 3;

        if($n1 > $n2 && $n1 > $n3){
            echo "$n1 Es mayor";
        } elseif ($n2 > $n1 && $n2 > $n3){
            echo "$n2 Es mayor";
        } else {
            echo "$n3 Es mayor";
        }
    ?>
</body>
</html>