<?php 
	include('../sql/connect.php'); 

  $q=$_GET["q"];

  //Busco todos los equipos
  $sql = "Select distinct nombreNominado from NOMINACION where categoria = '$q';"; 
  $retorno = "../nominaciones.php";
  
  $result = mysql_query($sql) or die(mysql_error());

  if ($q != ""){
  echo "<h2 class='title'>Info $q:</h2>";
  echo "<div class='entry'>";
  echo "<p>Nominados Actuales:</p> ";
  echo "<ol>";
  while($row = mysql_fetch_array($result)){
    echo "<li>$row[nombreNominado]</li>";
  }
  echo "</ol>";
  echo "<input type='button' onmouseover='this.style.cursor=\"pointer\"'  onClick='imprimeChat(\"$q\")' value='Muro de Comentarios'>"; 
  echo "<p>";
  echo "<div id='txtHint2'><p style='margin-left: 2em;'>Haz click en 'Muro de Comentarios' para ver el muro. Puede actualizarlo colocando #nombre_de_categoria en twitter.</p></div>";
  }
 // echo " <iframe src ='http://tweetchat.com/room/$q' width='100%' height='300'>"; echo "</iframe>";

echo "</div>";

 	mysql_close()

?>
