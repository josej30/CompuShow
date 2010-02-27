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

$carnet = $_POST["carnet"];

// Revisamos que ningun campo esta vacio
if (empty($_POST["carnet"])) {
	$_SESSION['ok'] = 2;
}
// Revisamos que no este registrado el carnet
$con = mysql_connect("localhost","compushow","compushow");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("compushow", $con);
$data = mysql_query("SELECT * FROM PERFIL WHERE carnetP='$carnet'",$con);
$info = mysql_fetch_array($data);
if (isset($info["nombreP"])) {
    $_SESSION['ok'] = 3;
}

// Si no ocurre ningun error continuamos aca
if ($_SESSION['ok']==0){
   $password = generaPass();
   // Se le envia el mail con sus datos
   $subject='Registro en la pagina del CompuShow';
   $message='Hola,

Gracias por registrarte en la la pagina del CompuShow. Guarda este mensaje como recordatorio de tus datos. 

	Usuario: '.$correo.' 
	Contrasena: '.$password.'

-----
CEIC 2010
Universidad Simon Bolivar';

mail($correo,$subject,$message);


//
// Agregando los datos en la base de datos
//
$correo = $_POST["correo"];
$login = strtok($_POST["correo"],"@");

mysql_query("UPDATE PERFIL SET email='$correo', password='$password' WHERE carnetP='$carnet'",$con);

//
// Fin del acceso a la base de datos
//

$_SESSION['ok'] = 10;
}
header("Location:registroadmin.php");
?>
