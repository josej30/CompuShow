<?php
// Parametros para conectarse a la BD
$db_host ="localhost";
$db_name ="compushow";
$username="compushow";
$password="compushow";

// Conexión a la Base de Datos
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
?>
