<?php

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno){
    die('Los siento hubo un problema de la conexion');
    }else{
        $sql = "INSERT INTO usuarios(ID,nombre,edad) Values(null,'Sonia',30)";
        $resultado = $conexion->query($sql);
        if($conexion->affected_rows >=1){
            echo 'Filas agregadas: ' . $conexion->affected_rows;
        }

    }

?>