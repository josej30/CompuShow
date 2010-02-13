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
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CompuShow 2010</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
					<li class="current_page_item"><a href="nominaciones.php">Nominaciones</a></li>
					<li><a href="registro.php">Registro</a></li>
				      <li><a href="login.php">Login</a></li>
					<?php
					if ($_SESSION['usuario']!='') {
						echo "<li><a href='logout.php'>{$_SESSION['usuario']} - <span style='color:red'>Logout</span></a></li>";
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
					<h2 class="title"><a href="#">Compushow 2010 </a></h2>
					<div class="entry">
						<p>El Centro de Estudiantes de Ingeniería de la Computación les da la bienvenida al <b>Compushow 
						2010.</b> Durante años se ha realizado este evento enmarcado en la <b>Semana de la Carrera</b> que
						incluye otros eventos como charlas, exposiciones, infoelectivas, la compurumba, entre otras.
						</p>
						<p>El período de nominaciones para el CompuShow está actualmente vigente y termina el día XX de YY. Así 
						que aprovecha y has las nominaciones lo antes posible. El período de votaciones se hará público una vez 
						que finalice el período de las nominaciones.
						</p>
						<p>Esperamos que disfruten del evento que les tenemos preparado y que participen en las actividades 
						programadas para su <b>Semana de la Carrera</b>.
						</p>
						<p><b>JD-CEIC</b></p>
					</div>
				</div>
				<div class="post">
					<h2 class="title"><a href="#">Pistas en la página del CompuShow</a></h2>
					<div class="entry">
						<p>Hemos desarrollado una serie de pistas que estarán escondidas (y otras no tan escondidas) en la página
						que actualmente están viendo. Estas pistas les permitirán obtener información confidencial de las 
						actividades que se están planificando para el CompuShow y algunas cosas más.
						</p>
						<p> Algunas ya están colocadas sólo esperando a que las encuentres y en los próximos días se colocarán
						nuevas pistas con más información.
						</p>
						<p><b>JD-CEIC</b>
						</p>
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
<a class="hide" href="pista1.html">:)</a>
</body>
</html>
