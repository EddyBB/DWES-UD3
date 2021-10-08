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
        $errorContraseña;
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
            /*$usuario = strip_tags($usuario);
            echo $usuario;
            echo"<br>";
            $usuario = stripslashes($usuario);
            echo $usuario;
            echo"<br>";
            $usuario = htmlspecialchars($usuario);
            echo $usuario;*/
            $validacion = preg_match("/^[a-zA-Z0-9_-]{8,}$/", $usuario);
            $validacion2 = preg_match("/^[A-Z[a-z]{15}{0-9}]$/", $contrasenya);
            if($validacion == true){
            } else {
                $errorUsuario = "usuario incorrecto";
            }
            if($validacion2 == true){
            } else {
                $errorContraseña = "contraseña incorrecto";
            }
        }

    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red"><?php echo $errorUsuario?> </span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>
            <span style="color:red"><?php echo $errorContraseña ?></span>
        </p>
        <p>
           <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
    </form>
</body>
</html>
