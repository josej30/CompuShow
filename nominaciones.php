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
        <li class="current_page_item"><a href="nominaciones.php">Nominaciones</a></li>
        <li><a href="registro.php">Registro</a></li>
        <li><a href="login.php">Login</a></li>
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
        <h2 class="title"><a href="#">Nominaciones del Compushow</a></h2>
        <div class="entry">

        <p> Escoja el nombre de la persona a la que desea nominar y la categoría asociada.</p>

        <?php include("sql/getPerfiles.php");?>
    <form action="sql/insertarNominacion.php" method="POST" >
        <p><span>Nominado:</span><input type='text' style='font-family:verdana;width:300px;font-size:12px' id='nombreNominado' name='nombreNominado'/> 
        <script> var obj = actb(document.getElementById('nombreNominado'),customarray);</script><br>
        
        <p><span>Categoria:</span><?php include("sql/selectCategoria.php");?>
        <br><p><input type='submit' value="Enviar" id='tb'/> 
    </form>
    </p>


        </div>
    <div id="txtHint"></div>
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
