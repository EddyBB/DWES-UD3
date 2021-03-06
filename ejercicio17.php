<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con to</title>
</head>
<body>
    <?php
        $errorInstituto = " ";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = " ";
            $apellido = " ";
            $direccion = " ";
            $instituto = " ";
            $estudios = " ";
            $texto = " ";

            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $instituto = $_POST["instituto"];
            $estudios = $_POST["estudios"];

            $nombre = strip_tags($nombre);
            $nombre = stripslashes($nombre);
            $nombre = htmlspecialchars($nombre);

            $apellido = strip_tags($apellido);
            $apellido = stripslashes($apellido);
            $apellido = htmlspecialchars($apellido);

            $direccion = strip_tags($direccion);
            $direccion = stripslashes($direccion);
            $direccion = htmlspecialchars($direccion);

            $texto = strip_tags($texto);
            $texto = stripslashes($texto);
            $texto = htmlspecialchars($texto);

            if(empty($nombre)){
                echo "El campo nombre debe de estar rellenado";
                echo"<br>";
            }

            if(empty($apellido)){
                echo "El campo apellido debe de estar rellenado";
                echo"<br>";
            }

            if(empty($direccion)){
                echo "El campo direccion debe de estar rellenado";
                echo"<br>";
            }

            if(empty($instituto)){
                echo "El campo instituto debe de estar rellenado";
                echo"<br>";
            }

            if(empty($estudios)){
                echo "El campo estudios debe de estar rellenado";
                echo"<br>";
            }
            
            if(!preg_match('/IES/', $instituto)){
                $errorInstituto = "error instituto debe empezar por IES";
            }

            if(isset($_POST["Wifi"])){
            } elseif(isset($_POST["Cable"])){

            } elseif(isset($_POST["Fibra"])){

            } else{
                echo "Ninguno de los campos radio ha sido seleccionado";
                echo "<br>";
            }

            if(isset($_POST["camposCheckbox"])){
                foreach($_POST["camposCheckbox"] as $valorCheckbox){
                    echo " ". $valorCheckbox;
                }
                echo "<br>";
            } else {
                echo "Ninguno de los 4 checkbox ha sido activado";
            }
        }
    ?>

    <fieldset>
        <legend> Formulario de opciones</legend>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value=""/>
                <span style="color:red"></span>
            </p>

            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" value=""/>
                <span style="color:red"></span>
            </p>

            <p>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value=""/>
                <span style="color:red"></span>
            </p>

            <input type="radio" id="Wifi" name="Wifi" value="Wifi"/>
            <label for="Wifi">Wifi</label>

            <input type="radio" id="Cable" name="Wifi" value="Cable"/>
            <label for="Cable">Cable</label>

            <input type="radio" id="Fibra" name="Wifi" value="Fibra"/>
            <label for="Fibra">Fibra</label>

            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value=""/>
                <span style="color:red"><?php echo $errorInstituto;?></span>
            </p>

            <p>
                <label for="estudios">Estudios elegidos</label>
                <input type="text" name="estudios" value=""/>
                <span style="color:red"></span>
            </p>

            <select name="campoSelectMultiple[]" multiple>
                <option value="Lunes" selected>Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Mi??rcoles" selected>Mi??rcoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">S??bado</option>
                <option value="Domingo">Domingo</option>
            </select>
            <br>

            <input type="submit" value="Enviar">
        </form>
    </fieldset>

    <fieldset>
        <legend>Preferencias</legend>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
            Historia<input type="checkbox" name="camposCheckbox" value="1">
            Geograf??a<input type="checkbox" name="camposCheckbox" value="2">
            Lengua<input type="checkbox" name="camposCheckbox" value="3">
            Matem??ticas<input type="checkbox" name="camposCheckbox" value="4">
            <br>

            <textarea name="campoTextarea" placeholder="Inserte aqu?? el texto"value="<?php echo $texto;?>"></textarea>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>
</body>
</html>