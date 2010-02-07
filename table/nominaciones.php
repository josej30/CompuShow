<?php 
	include('../sql/connect.php'); 

  $q=$_GET["q"];

  //Busco todos los equipos
  $sql = "Select distinct nombreP, apellidoP from NOMINACION LEFT JOIN PERFIL on (carnetNominado = carnetP) where categoria = '$q';"; 
  $retorno = "../nominaciones.php";
  
  $result = mysql_query($sql) or die(mysql_error());

  echo "<h2 class='title'>Nominaciones actuales de la categoria:</h2>";
  echo "<ol>";
  while($row = mysql_fetch_array($result)){
    echo "<li>$row[nombreP] $row[apellidoP]</li>";
  }
  echo "</ol></li>";
  echo "<h2 class='title'>Muro de Comentarios:</h2>";

 // echo " <iframe src ='http://tweetchat.com/room/$q' width='100%' height='300'>"; echo "</iframe>";
  echo "<center><iframe src='http://twubs.com/ajax360/embed/$q/?headerBgColor=%23204359&headerTextColor=%23FFFFFF&largeHeadshots' width='860' height='450' style='border:2px solid'><a href='http://twubs.com/$q'>#$q</a></iframe></center>";

 	mysql_close()

?>
