<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario Actividad Aula</h1>

    <?php
        $errorUsuario;
        $errorContrasenya;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usuario = "";
            $contrasenya = "";
            $usuario = $_POST["usuario"];
            $contrasenya = $_POST["contrasenya"];

            if(empty($usuario)){
                echo "El campo usuario debe de estar rellenado";
                echo"<br>";
            }

            if(empty($contrasenya)){
                echo "El campo contraseña debe de estar rellenado";
                echo"<br>";
            }
            //echo "el usuario $usuario tiene la contraseña $contrasenya";


      
            if(!preg_match('/\w{8,}/', $usuario)){
                $errorUsuario = "error usuario incorrecto";
            }
            if(!preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)){
                $errorContrasenya = "error contraseña incorrecta";
            }
            
            $usuario = strip_tags($usuario);
            $usuario = stripslashes($usuario);
            $usuario = htmlspecialchars($usuario);

            $contrasenya = stripslashes($contrasenya);
            $contrasenya = strip_tags($contrasenya);
            $contrasenya = htmlspecialchars($contrasenya);
    
        }
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" value="<?php echo $usuario;?>"/>
            <span style="color:red"><?php echo $errorUsuario;?> </span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" value="<?php echo $contrasenya;?>"/>
            <span style="color:red"><?php echo $errorContrasenya;?> </span>
        </p>
        <p>
           <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
    </form>
</body>
</html>
