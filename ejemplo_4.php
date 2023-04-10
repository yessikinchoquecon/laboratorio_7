<?php
//cadena de conexion al servidor y base de datos
$conection =  mysqli_connect("localhost", "root","","jhessica");
//Para verificar si existe algun error
if (!$conection) {
   die("La conexion fallo:".mysqli_conection_errot());
}
echo "Conectado exitosamente con procedimiento";
//Cerrar la conexion
mysqli_close($conection);
?>