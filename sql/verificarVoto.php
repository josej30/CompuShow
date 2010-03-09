<?php

	include('connect.php'); 
	$sqlvoto = "SELECT * FROM VOTOS WHERE carnetVotante={$_SESSION['usuario']}";
	$resvoto = mysql_query($sqlvoto); 
	$a = mysql_num_rows($resvoto);
	if ($a != 0){
		$_SESSION['voto']=1;
		header("Location:index.php");
	}

?>
