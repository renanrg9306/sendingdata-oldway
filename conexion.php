<?php
 class Conexion{
        function getConexion(){
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db = 'library';
            $conectar = new mysqli($host,$user,$password,$db);
            if($conectar->connect_error){
                die('Error de Conexion'. $conectar->connect_error);
            }
            return $conectar;
        }
    }
?>