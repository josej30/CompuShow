<?php 
session_start();
include("template/protegido.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include("template/head.php")?>
<script type="text/javascript" src="js/nomCategoria.js"></script>
<script language="javascript" type="text/javascript" src="js/actb.js"></script>
<script language="javascript" type="text/javascript" src="js/common.js"></script>
<script>
</script><br>
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

              <p> Escoja el nombre de la persona a la que desea nominar y la categoría asociada. A partir del número de nominaciones, se escogerán los 5 candidatos para avanzar a la próxima ronda.(<span style="color: red;">Importante:</span> Solo puede nominar a computistas(estudiantes y profesores), excepto para la categoría de compuadoptado y compulove)</p>

              <?php include("sql/getPerfiles.php");?>
              <form action="sql/insertarNominacion.php" method="POST" >
              <p><span>Categoria:</span><?php include("sql/selectCategoria.php");?>
              <p><span>Nominado:</span>
              <input type="text" style='font-family:verdana;width:300px;font-size:12px' id='nombreNominado' name='nombreNominado'/>
              <input type="hidden" id="agregar" value='+' onClick='agregarNominado()' />
              <p style="margin-left: 5em;"><input type="hidden" style='font-family:verdana;width:300px;font-size:12px' id='nombreNominado2' name='nombreNominado2'/>
              <p style="margin-left: 5em;"><input type="hidden" style='font-family:verdana;width:300px;font-size:12px' id='nombreNominado3' name='nombreNominado3'/>
              <input type="hidden" value='Inserta la caricatura aqui' id='cartoon' name='cartoon'/>

<script>
var obj = actb(document.getElementById('nombreNominado'),customarray);
var obj2 = actb(document.getElementById('nombreNominado2'),customarray);
var obj3 = actb(document.getElementById('nombreNominado3'),customarray);
</script>

            <input type='submit' value="Enviar" id='tb'/> 
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
