<?php
	session_start();

	include('sql/connect.php');

	$retorno = "../votaciones.php";

	$sql = "INSERT INTO VOTOS(categoria,carnetNominado,carnetVotante) VALUES('COMPUPAPI','{$_POST['COMPUPAPI']}','{$_SESSION['usuario']}')";
	$result = mysql_query($sql) or die(header("location: $retorno"));
	$sql = "INSERT INTO VOTOS(categoria,carnetNominado,carnetVotante) VALUES('COMPUMAMI','{$_POST['COMPUMAMI']}','{$_SESSION['usuario']}')";
	$result = mysql_query($sql) or die(header("location: $retorno"));
	$sql = "INSERT INTO VOTOS(categoria,carnetNominado,carnetVotante) VALUES('COMPUCHINAZO','{$_POST['COMPUCHINAZO']}','{$_SESSION['usuario']}')";
	$result = mysql_query($sql) or die(header("location: $retorno"));
	$sql = "INSERT INTO VOTOS(categoria,carnetNominado,carnetVotante) VALUES('COMPULOVE','{$_POST['COMPULOVE']}','{$_SESSION['usuario']}')";
	$result = mysql_query($sql) or die(header("location: $retorno"));
	$sql = "INSERT INTO VOTOS(categoria,carnetNominado,carnetVotante) VALUES('COMPUCARTOON','{$_POST['COMPUCARTOON']}','{$_SESSION['usuario']}')";
	$result = mysql_query($sql) or die(header("location: $retorno"));

	header("location: index.php")

?>
