<?php
  session_start();
	include('connect.php'); 
	include('funciones.php'); 

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $nombre = safe($_POST["nombreNominado"]);
 	$categoria  = safe($_POST["nombreCategoria"]);
  $retorno = "../nominaciones.php";

  $sql = "SELECT * from NOMINACION, PERFIL where carnetNominador = '{$_SESSION['usuario']}' and carnetNominado = carnetP and categoria = '$categoria' and CONCAT(nombreP, ' ', apellidoP) = '$nombre';";

  $result = mysql_query($sql) or die(mysql_error());

  if (mysql_num_rows($result) == 0)  {
  	$sql = "INSERT INTO NOMINACION (carnetNominador, carnetNominado, categoria) SELECT '{$_SESSION['usuario']}', carnetP, '$categoria' from PERFIL where CONCAT(nombreP, ' ', apellidoP) = '$nombre';";

    $result = mysql_query($sql) or die(mysql_error());
  }
  else {
    echo "<script language=\"JavaScript\">{alert(\"Ya voto en esta categoria por esa persona.\");location.href=\"$retorno\";}</script>";
  }

  mysql_close();

  echo "<script language=\"JavaScript\">{alert(\"Ha introducido correctamente al nominado.\");location.href=\"$retorno\";}</script>";
?>
