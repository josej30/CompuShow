<?php 

	include('connect.php'); 
	//Se imprimen las categorias con sus nominados

	$retorno = "../votaciones.php";

	$sql = "SELECT nombreC FROM CATEGORIA;"; 
	$result = mysql_query($sql) or die(header("location: $retorno"));

	echo "<form method='POST' action='votar.php'>";

	while($row = mysql_fetch_array($result)){
		printf("- <a class='categvotos' id='%s' href=''>%s</a></p>",$row[nombreC],$row[nombreC]);
		printf("<div id='vot%s'>",$row['nombreC']);

		$sqlnomi = "SELECT nombreP, apellidoP, carnetP FROM NOMINACION, PERFIL WHERE categoria='".$row['nombreC']."' AND carnetNominado=carnetP";
		$resnomi = mysql_query($sqlnomi) or die(header("location: $retorno"));

		if(!mysql_num_rows($resnomi)) {
			echo "<p>No hay nominados para mostrar.</p>";
		}
		else {
			echo "<table border=0>";
			while($rownomi = mysql_fetch_array($resnomi)){
				echo "<tr><td>" . $rownomi['nombreP'] . " " . $rownomi['apellidoP']."</td>";
				echo "<td><input type='radio' name='".$row['nombreC']."' value='".$rownomi['carnetP']."'></td></tr>";
			}
			echo "</table>";
		}
		echo "</div>";
	}

	echo "<br/><input type='submit' value='Votar'>";
	echo "</form>";

	mysql_close();

?>
