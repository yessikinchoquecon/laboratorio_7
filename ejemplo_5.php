<?php
//cadena de servidor
$conection =  mysqli_connect("localhost", "root","","jhessica");
//Para verificar si existe algun error
if (!$conection) {
    die("La conexion fallo:".$conection->conect_error);
 }
 echo "Conectado exitosamente con objetos";
 //Cerrar la conexion
 mysqli_close($conection);
 ?>
 