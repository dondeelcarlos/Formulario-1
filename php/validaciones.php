<?php
    
require_once ('class.php'); 

 conectarBD ();//conexion a la BD


 	$sql = "INSERT INTO datos VALUES ('$_POST[txtnombre]','$_POST[txtapellidos]','$_POST[txtdireccion]','$_POST[txttelefono]')"; //Insersion de datos 

pg_query($sql); //Ejecucion del qwery


	echo "datos insertados correctamente";
            
?>