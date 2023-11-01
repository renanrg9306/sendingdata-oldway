<?php
   include_once('conexion.php'); 
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
    $conexion = new Conexion();
    $cn = $conexion->getConexion();
    $sqlstatement = "INSERT INTO datos (nombre,email) VALUES ('$nombre','$email')";
    if($cn->query($sqlstatement)){
        echo'Datos Insertados';

    }else{
        echo 'Error al Ingresar datos';
    }
?>