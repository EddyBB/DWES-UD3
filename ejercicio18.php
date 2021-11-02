<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario mas estricto</title>
</head>
<body>
    <?php
        $errorPoblacion = " ";
        $errorCodigo = " ";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $poblacion = " ";
            $codigoPostal = " ";
            $texto = " ";

            $poblacion = $_POST["poblacion"];
            $codigoPostal = $_POST["codigo"];

            $texto = strip_tags($texto);
            $texto = stripslashes($texto);
            $texto = htmlspecialchars($texto);

            if(empty($poblacion)){
                echo "El campo poblacion debe de estar rellenado";
                echo"<br>";
            }

            if(empty($codigoPostal)){
                echo "El campo código postal debe de estar rellenado";
                echo"<br>";
            }

            if(!preg_match('/[A-Za-z]/', $poblacion)){
                $errorPoblacion = "Error, sólo se permite letras";
            }

            if(!preg_match('/[0-9]/', $codigoPostal)){
                $errorCodigo = "Error, sólo se permiten números";
            }

        }
    ?>
    <fieldset>
        <legend>Formulario con criterios</legend>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <p>
                <label for="poblacion">Poblacion</label>
                <input type="text" name="poblacion" value=""/>
                <span style="color:red"><?php echo $errorPoblacion;?></span>
            </p>

            <p>
                <label for="codigo">Codigo Postal</label>
                <input type="text" name="codigo" value=""/>
                <span style="color:red"><?php echo $errorCodigo;?></span>
            </p>

            <input type="radio" id="huelva" name="provincia" value="huelva"/>
            <label for="huelva">Huelva</label>

            <input type="radio" id="sevilla" name="provincia" value="sevilla"/>
            <label for="sevilla">Sevilla</label>

            <input type="radio" id="cordoba" name="provincia" value="cordoba"/>
            <label for="cordoba">Cordoba</label>

            <input type="radio" id="jaen" name="provincia" value="jaen"/>
            <label for="jaen">Jaen</label>

            <input type="radio" id="cadiz" name="provincia" value="cadiz"/>
            <label for="cadiz">Cadiz</label>

            <input type="radio" id="malaga" name="provincia" value="malaga"/>
            <label for="malaga">Malaga</label>

            <input type="radio" id="granada" name="provincia" value="granada"/>
            <label for="granada">Granada</label>

            <input type="radio" id="almeria" name="provincia" value="almeria"/>
            <label for="almeria">Almeria</label>
            <br>

            <textarea name="campoTextarea" placeholder="Descripción del municipio" value="<?php echo $texto;?>"></textarea>
            <br>

            <input type="file" name="imagen" id="imagen"><br>
            <button type="submit">Aceptar</button><br><br>

            <input type="submit" name = "enviar">
            <input type="reset" name = "reset">
        </form>
    </fieldset>
</body>
</html>