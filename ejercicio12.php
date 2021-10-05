<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
        $fecha = "28/03/1986";
        $resto = 0;
        $suma = 0;
        $res = 0;

        $suma = $suma + substr($fecha,0,2) + substr($fecha,3,5) + substr($fecha,6,10);
        while(($suma / 10) != 0) {
            $resto = $suma%10;
            $suma = intval($suma/10);
            $res = $res + $resto;
        }
        $res = $res + $suma;

        $suma = 0;
        $resto = 0;
        while(($res/ 10) >= 10) {
            $resto = $suma%10;
            $suma = intval($res/10);
            $res = $suma + $resto;
        }
        echo "Tu numero magico es: $res";
    ?>
</body>
</html>