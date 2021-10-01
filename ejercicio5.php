<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <?php
    $n1 = 4;
    $contador = 1;
    do {
        echo "$n1 x $contador = ", $n1 * $contador;
        echo"<br>";
        $contador++;
    }while($contador < 11)
    ?>
</body>
</html>