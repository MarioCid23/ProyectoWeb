<?php
include("conexion_bd.php");

if (!empty($_POST["btn-enviar"])){
    if (empty($_POST["Paciente"])) {
        echo '<div class=alert alert-danger">LOS CAMPOS ESTAN VACIOS</div> ';
    } else {
        $Paciente=$_POST["Paciente"];
        $sql=$conexion->query(" insert into base(Paciente) VALUES('$Paciente')");
        
            header("location:inicio2.php");
        
          
    }
}

?>