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
          echo "<li class='current_page_item'><a href='nominaciones.php'>Nominaciones</a></li>";
        }
        if ($_SESSION['usuario']=='') {
          echo "<li><a href='registro.php'>Registro</a></li>";
          echo "<li><a href='login.php'>Login</a></li>";
        }

        if ($_SESSION['usuario']!='') {
          echo "<li><a href='logout.php'>{$_SESSION['usuario']} - <span style='color:red'>Logout</span></a></li>";
        }
      ?>
    </ul>
  </div>
</div>

