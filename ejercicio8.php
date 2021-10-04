<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

    <table border="1" >
        <tr bgcolor="red">
        <th><font color=#FFFFFF>Elevado a</th>
        <th><font color=#FFFFFF>Resultado</th>
        </tr>
        <?php
            $hasta = 6;
            
            for($i = 0; $i <= $hasta; $i++){
                if($i == 4){
                    continue;
                }
                if($i == 6){
                    break;
                }
                $elevado = pow(2, $i);
                echo "<tr bgcolor='red'>";
                echo "<th><font color=#FFFFFF>$i</th>";
                echo "<th><font color=#FFFFFF>$elevado</th>";
                echo "</tr>";
            }
    ?>
    </table>
</body>
</html>