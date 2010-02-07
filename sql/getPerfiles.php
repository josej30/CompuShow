<?php include('connect.php'); 
  //Busco todas las categorias
  $sql = "SELECT nombreP, apellidoP FROM PERFIL;"; 
  $retorno = "../nominaciones.php";

  $result = mysql_query($sql) or die(header("location: $retorno"));

  echo "<script> var customarray = new Array(' '";
  while($row = mysql_fetch_array($result)){
    echo ", '$row[nombreP] $row[apellidoP]'";
  }
  echo ")</script>";

  mysql_close();
?>
