<?php 
	include('connect.php'); 
	include('funciones.php'); 

  $nombre = safe($_POST["nombreNominado"]);
 	$categoria  = safe($_POST["nombreCategoria"]);
  $retorno = "../nominaciones.php";

	//Inserto el FAQ
  	$sql = "INSERT INTO NOMINACION (carnetNominado, categoria) SELECT carnetP, '$categoria' from PERFIL where CONCAT(nombreP, ' ', apellidoP) = '$nombre';";

//  $result = mysql_query($sql); 
 $result = mysql_query($sql) or die(header("location: $retorno"));
  
 	mysql_close();

  echo "<script language=\"JavaScript\">{alert(\"Ha introducido correctamente al nominado.\");location.href=\"$retorno\";}</script>";
echo $sql;
?>
