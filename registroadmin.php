<?php session_start();

include("template/esadmin.php");

if(esadmin() == -1){
	header("Location:index.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Design by Free CSS Templates
    http://www.freecsstemplates.org
    Released for free under a Creative Commons Attribution 2.5 License

    Name       : Improved 
    Description: A two-column, fixed-width design for 1024x768 screen resolutions.
    Version    : 1.0
    Released   : 20091213

  -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>CompuShow 2010</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/nomCategoria.js"></script>
<script language="javascript" type="text/javascript" src="js/actb.js"></script>
<script language="javascript" type="text/javascript" src="js/common.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="wrapper-bgtop">
	<div id="header">
	  <div id="logo">
	    <h1><a href="#">CompuShow</a></h1>
	    <p><em>CEIC USB</em></p>
	  </div>
	  <hr />
	  <!-- end #logo -->
	  <div id="menu">
	    <ul>
	      <li><a href="index.php" class="first">Inicio</a></li>
		<?php
		if ($_SESSION['usuario']!='') {
			echo "<li><a href='logout.php'>{$_SESSION['usuario']} - Logout</a></li>";
		}
		?>
	    </ul>
	  </div>
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
	  <div id="content">
	    <div class="post">
	      <h2 class="title"><a href="#">Registro</a></h2>
	      <div class="entry">

		<div id='inforeg'>
		<?php
		   if($_SESSION['ok']==1){
		      echo "<p><b><a style='color:red'>El correo debe pertenecer a la usb. Ejemplo: usuario@usb.ve.</a></b></p>";
		   }
		   if($_SESSION['ok']==2){
		      echo "<p><b><a style='color:red'>Tienes que llenar todos los campos.</a></b></p>";
		   }
		   if($_SESSION['ok']==3){
		      echo "<p><b><a style='color:red'>Ya existe un usuario registrado con ese carnet. Que revise en su usbid para ver su clave.</a></b></p>";
		   }
		   if($_SESSION['ok']==10){
		      echo "<p><a style='color:green'>Usuario registrado correctamente. Un correo electrónico ha sido enviado a su dirección de la USB con la contraseña para ingresar al sistema.</a></p>";
		   }
		   $_SESSION['ok'] = 0;		   
		?>
		</div>

		<p>Este sistema es específico para los integrantes de la JD del CEIC para registrar a los alumnos que no tienen cuenta en el LDC.</p>

		<form method='POST' action='registrado-admin.php'>

		<p><span>Carnet:</span>
              <input type="text" name='carnet' id='carnet'>
		<span><b>Ej: Si el carnet es 06-123456, lo que pondrías en este campo sería 6123456</b></span></p>
              <p><span>Correo usb:</span>
              <input type="text" name='correo' id='correo'>
		<span><b>Ej: 06-123456@usb.ve</b></span></p>
		<br/><br/>
		<input type='submit' value="Enviar"/> 
              </form>

	      </div>
	    </div>
	  </div>
	  <!-- end #content -->
	  <div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
      </div>
    </div>
    <div id="footer-bgcontent">
      <div id="footer">
	<p>Diseñado por <a href="http://www.freecsstemplates.org/">Free 
	    CSS Templates</a> y modificaciones por <a href="http://ceic.ldc.usb.ve">CEIC-USB</a>.</p>
      </div>
    </div>
    <!-- end #footer -->
  </body>
</html>
