<?php
session_start();
include('connect.php'); 
include('funciones.php'); 

ini_set('display_errors', 1);
error_reporting(E_ALL);

$nombre = safe($_POST["nombreNominado"]);
$categoria  = safe($_POST["nombreCategoria"]);
$nombre2 = safe($_POST["nombreNominado2"]);
$nombre3 = safe($_POST["nombreNominado3"]);
$cartoon = safe($_POST["cartoon"]);
$retorno = "../nominaciones.php";

$sql = "SELECT * from PERFIL where CONCAT(nombreP, ' ', apellidoP) = '$nombre';";

$result = mysql_query($sql) or die(mysql_error());
 
//chequeo si es computista
if (mysql_num_rows($result) == 0 && $categoria != "COMPUADOPTADO")  {
  echo "<script language=\"JavaScript\">{alert(\"La persona para esta categoria debe ser computista.\");location.href=\"$retorno\";}</script>";
} else {

  //Chequeo si los demas son computistas
  if ($categoria == "COMPULOVE") {
    $sql = "SELECT * from PERFIL where CONCAT(nombreP, ' ', apellidoP) = '$nombre2' or CONCAT(nombreP, ' ', apellidoP) = '$nombre3' ;";
    $result = mysql_query($sql) or die(mysql_error());
    if (mysql_num_rows($result) == 0)  {
      echo "<script language=\"JavaScript\">{alert(\"Las personas para esta categoria debe ser computista.\");location.href=\"$retorno\";}</script>";
    } else {
      $nombre = $nombre.', '.$nombre2.', '.$nombre3;
    }
  }

  if ($categoria == "COMPUCARTOON") {
      $nombre = $nombre.' ----> '.$cartoon;
    
  }

  //Chequeo de que ya haya votado por esa persona
  $sql = "SELECT * from NOMINACION where carnetNominador = '{$_SESSION['usuario']}' and nombreNominado = '$nombre' and categoria = '$categoria';";
  $result = mysql_query($sql) or die(mysql_error());

  //Inserto La nominacion
  if (mysql_num_rows($result) == 0)  {
    $sql = "INSERT INTO NOMINACION (carnetNominador, nombreNominado, categoria) values('{$_SESSION['usuario']}', '$nombre', '$categoria');";

    $result = mysql_query($sql) or die(mysql_error());
  }
  else {
    echo "<script language=\"JavaScript\">{alert(\"Ya voto en esta categoria por esa persona.\");location.href=\"$retorno\";}</script>";
  }

  mysql_close();

  echo "<script language=\"JavaScript\">{alert(\"Ha introducido correctamente al nominado.\");location.href=\"$retorno\";}</script>";
}
  
?>
