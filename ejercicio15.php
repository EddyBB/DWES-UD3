<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <table border="1">
        <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>id</th>
        </tr>
        <?php
            $productos = array();
            $productos[0] = array("Nombre" => "Pantene","Precio" => "12","Stock" => "4","Identificador" => "0001");
            $productos[1] = array("Nombre" => "HS","Precio" => "11","Stock" => "2","Identificador" => "0002");
            $productos[2] = array("Nombre" => "Loreal","Precio" => "13","Stock" => "1","Identificador" => "0003");
            var_dump($productos);
            echo"<p>";
            foreach($productos as $tabla ){
                echo "<tr>";
                echo "<td>$tabla[Nombre]</td>";
                echo "<td>$tabla[Precio]</td>";
                echo "<td>$tabla[Stock]</td>";
                echo "<td>$tabla[Identificador]</td>";
                echo "</tr>";
            }

        ?>
    </table>
</body>
</html>