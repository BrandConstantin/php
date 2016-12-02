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
        $conection = new mysqli("localhost","root","Sjzm0080","crowded");
        if ($conection->connect_error > 0) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $conection->connect_error);
        } else {
            $conection->select_db("crowded");
            $conection->set_charset("utf8");
        }
  
        $query = $conection->query("SELECT * FROM pub");
        //or die($mysql->error);
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
            <a class="navbar-brand" href="userView.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li><a href="userViewPubs.php"><span class="glyphicon glyphicon-copy"></span> Pubs</a></li>
              <li><a href="userViewCity.php"><span class="glyphicon glyphicon-transfer"></span> Ciudades</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="signOut.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión <?= $_SESSION['user']; ?></a></li>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div>
        <img src="../img/carousel/carousel1.png" alt="Crowded1" width="99%" height="340"> 
    </div>   
    
    <!--------------------------------------------------------->
   
  </body>
</html>