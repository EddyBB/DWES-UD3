<?php
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
        echo "usuario correcto;";
    }
    if($validacion2 == true){
        echo "contraseá correcta";
    }
?>