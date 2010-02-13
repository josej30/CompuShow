<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include("template/head.php")?>
    <script type="text/javascript" src="js/nomCategoria.js"></script>
    <script language="javascript" type="text/javascript" src="js/actb.js"></script>
    <script language="javascript" type="text/javascript" src="js/common.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="wrapper-bgtop">
        <?php include("template/header.php")?>
        <!-- end #header -->

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
  <?php include("template/footer.php")?>
  </body>
</html>
