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
    <!--<link href="../css/style.css" rel="stylesheet"> -->
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
        
        //$query = $conection->query("SELECT * FROM pub");
        
        $pubId = $_POST['pubId'];
        $pubLogo = $_POST['pubLogo'];
        $pubName = $_POST['pubName'];
        $pubPass = $_POST['pubPass'];
        $pubEmail = $_POST['pubEmail'];
        $pubUbication = $_POST['pubUbication'];
        $city = $_POST['city'];
        $dateHigh = $_POST['dateHigh'];
        $capacity = $_POST['capacity'];
        $musicType = $_POST['musicType'];
        $pubDj = $_POST['pubDj'];
        $userType = $_POST['userType'];
        
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
    <div>
        <img src="../img/carousel/carousel3.png" alt="Crowded1" width="99%" height="340"> 
    </div>   
    
    <!--------------------------------------------------------->    

            <div id="login" class="col-xs-12 col-sm-12 col-md-12">
              <h1 style="margin-bottom: 50px;">Elimina Datos Pub:</h1>
              <form action="deletePubAction.php" method="POST">
                  
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubId">Pub Id:</label><br>
                <input type="text" name="pubId" class="form-control center-block" id="pubId" value="<?= $pubId; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubLogo">Logo:</label><br>
                <input type="texto" name="pubLogo" class="form-control center-block" id="pubLogo" value="<?= $pubLogo; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubName">Nombre:</label><br>
                <input type="text" name="pubName" class="form-control center-block" id="pubName"  value="<?= $pubName; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubPass">Contraseña:</label><br>
                <input type="text" name="pubPass" class="form-control center-block" value="<?= $pubPass; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubEmail">Correo:</label><br>
                <input type="text" name="pubEmail" class="form-control center-block" id="pubEmail"  value="<?= $pubEmail; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubUbication">Ubicación:</label><br>
                <input type="text" name="pubUbication" class="form-control center-block" id="pubUbication" value="<?= $pubUbication; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="city">Ciudad:</label><br>
                <input type="text" name="city" class="form-control center-block" id="city" value="<?= $city; ?>" readonly=""></br>
                                
                <span class="glyphicon glyphicon-user"></span>
                <label for="dateHigh">Fecha Alta:</label><br>
                <input type="date" name="dateHigh" class="form-control center-block" id="dateHigh" value="<?= $dateHigh; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="capacity">Capacidad:</label><br>
                <input type="number" name="capacity" class="form-control center-block" id="capacity"  value="<?= $capacity; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="musicType">Tipo Musica:</label><br>
                <input type="text" name="musicaType" class="form-control center-block" id="musicType" value="<?= $musicType; ?>" readonly=""></br>
                
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubDj">Dj:</label><br>
                <input type="text" name="pubDj" class="form-control center-block" id="pubDj"  value="<?= $pubDj; ?>" readonly=""></br>
                                
                <span class="glyphicon glyphicon-user"></span>
                <label for="userType">Tipo Usuario:</label><br>
                <input type="text" name="userType" class="form-control center-block" id="userType"  value="<?= $userType; ?>" readonly=""></br>
                
                <input type="hidden" name="action" class="form-control center-block" id="modifyPub" autofocus placeholder="pubId"></br>      
                <button type="submit" class="btn btn-default" name="action" value="eliminy" style="background-color: #lightblue;">Borrar Pub
                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
          </div>
</body>
</html>