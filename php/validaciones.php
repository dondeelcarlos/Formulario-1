<?php

global $nombre, $apellidos,$direccion,$telefono;
$nombre = $_POST['txt_nombre']; 
$apellidos = $_POST ['txt_apellidos'];
$direccion = $_POST ['txt_direccion']; 
$telefono = $_POST ['txt_telefono']; 

    
require_once ('class.php'); 

    $conexion=conectarBD(); 


        function Insertar ($name,$apelli,$direc,$phone)
        {
            $sql = "INSERT INTO datos VALUES (".$name.", '".$apelli."', '".$direc."', '".$phone."')";
            
             return pg_query($conexion,$sql);
        }
   
insertar($nombre,$apellidos,$direccion,$telefono); 


?>