<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $fecha_nacimiento = 995;
        $anoActual = date("Y");
        $edad = $anoActual - $fecha_nacimiento;

        if($edad >= 18 && $edad < 65){
            echo "Puedes pasar dentro";
        } elseif($edad < 18){
            echo "No puedes pasar";
        } elseif($edad > 65){
            echo "Demasiado mayor para pasar";
        }
        echo"<p>";

        /*$fechaEntrada = strtotime("10-12-1994 12:01:00");
        $fechaActual = strtotime(date("d-m-Y H:i:00",time()));
        $edadActual = $fechaActual - $fechaEntrada;
        $edadCalculada = floor($edadActual / (365 * 24 * 60 * 60));
        if($edadCalculada >= 18 && $edadCalculada < 65){
            echo "Puedes pasar dentro";
        } elseif($edadCalculada < 18){
            echo "No puedes pasar";
        } elseif($edadCalculada > 65){
            echo "Demasiado mayor para pasar";
        }*/

        $fecha_nacimiento = new DateTime("1998-01-25");
        $hoy = new DateTime();
        $edad2 = $hoy->diff($fecha_nacimiento);

        if($edad2->y >= 18 && $edad2->y < 65){
            echo "Puedes pasar dentro";
        } elseif($edad2->y < 18){
            echo "No puedes pasar";
        } elseif($edad2->y > 65){
            echo "Demasiado mayor para pasar";
        }
    ?>
</body>
</html>