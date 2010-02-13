<?php session_start();
$con = mysql_connect("localhost","compushow","compushow");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("compushow", $con);
$correo = $_POST["correo"];
$data = mysql_query("SELECT * FROM PERFIL WHERE email='$correo'",$con);
$row = mysql_fetch_array($data, MYSQL_ASSOC);

if ($row['password']==$_POST['pass']){
	$_SESSION['usuario'] = $row['carnetP'];
}

header("Location:index.php");
?>
