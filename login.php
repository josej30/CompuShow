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
	      <h2 class="title"><a href="#">Login</a></h2>
	      <div class="entry">

		<br/><br/><br/><br/><br/>
		<center>
		<form id="login" method="post" action="login-check.php">
		  <table border=0>
		    <tr>
		      <td><b>Correo</b></td>
		      <td><input type="text" maxlength="20" name="correo"></td>
		      </tr>
		    <tr>
		      <td><b>Contraseña</b></td>
		      <td><input type="password" maxlength="20" name="pass"></td>
		      </tr>
		    </table>
		    <br/><input type="submit" value="Ingresar"/>
		    <br/><br/>
		</form>
		</center>		

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
