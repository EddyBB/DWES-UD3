<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php

        $numero = 4;
        $factorial = 1;
        for($i = 1; $i <= $numero; $i++){
            $factorial = $factorial * $i;
            echo $factorial, " ";
            
        }
        
        
    ?>
</body>
</html>