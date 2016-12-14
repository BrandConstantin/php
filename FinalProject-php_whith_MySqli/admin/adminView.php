<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png"/>
    <!--bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--css propio-->
    <link href="../css/style.css" rel="stylesheet"> 
  </head>
  <body>
    <?php
    if(($row[2] == $user) && ($row[3] == $passIntro) && ($row[5]=="admin")){
        echo "<h3>Bienvenido administrador</h3>";
    }
    //deja acceder si estas logueado
      //if($_SESSION['logueado'] == true && $_SESSION['tipoUsuario'] == "administrador"){
    ?>  
    <!--barra de navegacion -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="adminView.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
            <li><a href="pubs.php"><span class="glyphicon glyphicon-copy"></span> Pubs</a></li>
            <li><a href="municipalitys.php"><span class="glyphicon glyphicon-transfer"></span> Ciudades</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="signOut.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión <?= $_SESSION['user']; ?></a></li>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="right">
        <ul id="galeria">
            <li><img src="../img/carousel/carousel1.png" alt="Crowded1" width="99%" height="340"> </li>
            <li><img src="../img/carousel/carousel2.png" alt="Crowded1" width="99%" height="340"> </li>
            <li><img src="../img/carousel/carousel3.png" alt="Crowded1" width="99%" height="340"> </li>
        </ul>    
    </div>        
  </body>
</html>