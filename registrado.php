<?php session_start();
$_SESSION['ok'] = 0;
// Funcion para generar el password aleatorio
function generaPass() {
  $pass = "";
  $posibles = "0123456789bcdfghjkmnpqrstvwxyz"; 
  $i = 0; 
  while ($i < 8) { 
    $char = substr($posibles, mt_rand(0, strlen($posibles)-1), 1);
    if (!strstr($pass, $char)) { 
      $pass .= $char;
      $i++;
    }
  }
  return $pass;
}
// Revisamos que el correo sea del ldc
$dominio = substr($_POST["correo"], -10);
if ($dominio != 'ldc.usb.ve') {
   	$_SESSION['ok'] = 1;
}
// Revisamos que ningun campo esta vacio
if (empty($_POST["nombres"]) | empty($_POST["apellidos"]) | empty($_POST["correo"])) {
	$_SESSION['ok'] = 2;
}
// Revisamos que no este registrado el mail
$con = mysql_connect("localhost","compushow","compushow");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("compushow", $con);
$correo = $_POST["correo"];
$data = mysql_query("SELECT * FROM PERFIL WHERE email='$correo'",$con);
$info = mysql_fetch_array($data);
if (sizeof($info) != 1) {
    $_SESSION['ok'] = 3;
}

// Si no ocurre ningun error continuamos aca
if ($_SESSION['ok']==0){
   $password = generaPass();
   $_SESSION['pass'] = $password;
   // Se le envia el mail con sus datos
   $subject='Registro en la pagina del CompuShow';
   $message='Hola '.$nombre.',

Gracias por registrarte en la la pagina del CompuShow. Guarda este mensaje como recordatorio de tus datos. 

	Usuario: '.$correo.' 
	Contrasena: '.$password.'

-----
CEIC 2010
Universidad Simon Bolivar';

if (mail($correo,$subject,$message) == -1)  {
	echo "Error al eviar el mail";
}

//
// Agregando los datos en la base de datos
//
$con = mysql_connect("localhost","compushow","compushow");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("compushow", $con);
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$login = strtok($_POST["correo"],"@");

mysql_query("INSERT INTO PERFIL (nombreP, apellidoP, carnetP, email, password) VALUES ('$nombres', '$apellidos', '$login', '$correo', '$password')",$con);

//
// Fin del acceso a la base de datos
//

$_SESSION['ok'] = 10;
}
header("Location:registro.php");
?>
