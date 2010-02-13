<?php session_start();?>

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
    <?php include("template/head.php")?>
  </head>
  <body>
    <div id="wrapper">
      <div id="wrapper-bgtop">
    <?php include("template/header.php")?>
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
		      echo "<p><b><a style='color:red'>El correo debe pertenecer al ldc. Ejemplo: usuario@ldc.usb.ve.</a></b></p>";
		   }
		   if($_SESSION['ok']==2){
		      echo "<p><b><a style='color:red'>Tienes que llenar todos los campos.</a></b></p>";
		   }
		   if($_SESSION['ok']==3){
		      echo "<p><b><a style='color:red'>Ya existe un usuario registrado con ese email. Cualquier duda comunícate con nosotros a ceic.usb@gmail.com</a></b></p>";
		   }

		   if($_SESSION['ok']==10){
		      echo "<p><a style='color:green'>Tu usuario ha sido registrado correctamente. Un correo electrónico ha sido enviado a tu dirección del LDC con la contraseña para ingresar al sistema.</a></p>";
		   }
		   $_SESSION['ok'] = 0;		   
		?>
		</div>

		<p>Tienes dos maneras de registrarte para las nominaciones y votaciones del CompuShow.</p>

		<ol>
		  <li><p>Si tienes cuenta de correo en el LDC llena el siguiente campo.</p>

		<form id="registro" method="post" action="registrado.php">
		  <table border=0>
		    <tr>
		      <td><b>Correo</b></td>
		      <td><input type="text" maxlength="20" name="correo"></td>
			<td><a style='color:red;'>Ejemplo:</a> usuario@ldc.usb.ve</td>
		      </tr>
		    </table>
		    <br/><input type="submit" value="Registrarse"/>
		    <br/><br/>
		</form>
		    <br/>
		    <li><p>Si no tienes cuenta de correo asignada por el LDC, pasa por la sala de 
			  lectura de computación para recoger tu nombre de usuario y contraseña.</p>		    
		</ol>

	      </div>
	    </div>
	  </div>
	  <!-- end #content -->
	  <div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
      </div>
    </div>

    <?php include("template/footer.php")?>
    <!-- end #footer -->
  </body>
</html>
