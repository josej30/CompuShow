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
<script type="text/javascript" src="js/jquery.js"></script>   
<script type="text/javascript" src="js/votaciones.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="wrapper-bgtop">
    <?php include("template/header.php")?>
		<!-- end #header -->
		<div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title"><a href="#">Votaciones del Compushow </a></h2>
					<div class="entry">

					<p>Haz click en la categoría que desees para realizar tu voto.</p>

					<?php include("sql/selectCategoriaVot.php");?>

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
</body>
</html>
