<?php

if (!empty($_POST["btn-signin"])){
    if (empty($_POST["USERNAME"]) and empty($_POST["PASSWORD"])) {
        echo '<div class=alert alert-danger">LOS CAMPOS ESTAN VACIOS</div> ';
    } else {
        $usuario=$_POST["USERNAME"];
        $clave=$_POST["PASSWORD"];
        $sql=$conexion->query(" select * from usuarios where USERNAME='$usuario' and PASSWORD='$clave' ");
        if ($datos=$sql->fetch_object()){
            header("location:inicio2.php");
        } else {
            echo '<div class="alert alert-danger">pura bandera CT</div>'; 
        }

    }
}

?>