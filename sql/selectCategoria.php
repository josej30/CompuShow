<?php include('connect.php'); 
  //Busco todas las categorias
  $sql = "SELECT nombreC, descripcion FROM CATEGORIA;"; 
  $retorno = "../nominaciones.php";

  $result = mysql_query($sql) or die(header("location: $retorno"));

    echo "<select name ='nombreCategoria' onchange='showUser(this.value)'>";
    echo "<option value = ''></option>";
  while($row = mysql_fetch_array($result)){
    echo "<option value = '$row[nombreC]'>$row[nombreC]: $row[descripcion]</option>";
  }
    echo "</select>";

  mysql_close();
?>
