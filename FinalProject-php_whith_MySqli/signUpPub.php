<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <!--bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--css propio-->
    <link href="css/style.css" rel="stylesheet"> 
  </head>
    <body>
        <?php 
        //compruve if is stablished the conexion with the mysql
        $conexion = new mysqli("localhost", "root", "Sjzm0080");
        
        if ($conexion->connect_errno > 0) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $conexion->connect_error);
        } else {
            $conexion->select_db("crowded");
            $conexion->set_charset("utf8");
        }
        
        //realize a sign up to a user
        if($_POST['action'] == "newPub"){
            $insert = "INSERT INTO user (pubId, pubLogo, pubName, pubPass, pubEmail, pubUbication"
                    . "city, dateHigh, capacity, musicType, pubDj, userType) VALUES ('$_POST[pubId]',"
                    . "'$_POST[pubLogo]','$_POST[pubName]','$_POST[pubPass]','$_POST[pubEmail]', '$_POST[pubUbication]',"
                    . "'$_POST[city]','$_POST[dateHigh]','$_POST[capacity]','$_POST[musicType]',"
                    . "'$_POST[pubDj]','$_POST[userType]',)";
            
            $conexion->exec($insert);
            header("Refresh: 0, url=index.php");
        }
        ?>
        <div class="logo">
            <img src="img/logo.png" name="logo" alt="logo">
        </div>
        <div id="principal">
            <div id="loginReg">
              <h1>Registrate:</h1>
              <form action="signUpPubAction.php" method="POST">
                <input type="hidden" name="pubId" class="form-control center-block" id="pubId" autofocus placeholder="pubId"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubLogo">Logo:</label><br>
                <input type="texto" name="pubLogo" class="form-control center-block" id="pubLogo" autofocus placeholder="logo pub"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubName">Nombre:</label><br>
                <input type="text" name="pubName" class="form-control center-block" required="required"  id="pubName" autofocus placeholder="nombre pub"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubPass">Contraseña:</label><br>
                <input type="password" name="pubPass" class="form-control center-block" required="required"  id="pubPass" autofocus placeholder="contraseña"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubEmail">Correo:</label><br>
                <input type="email" name="pubEmail" class="form-control center-block" required="required"  id="pubEmail" autofocus placeholder="correo"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubUbication">Ubicación:</label><br>
                <input type="text" name="pubUbication" class="form-control center-block" required="required"  id="pubEmail" autofocus placeholder="ubicación"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="city">Ciudad:</label><br>
                <input type="text" name="city" class="form-control center-block" id="city" autofocus placeholder="ciudad"></br>
                <input type="hidden" name="dateHigh" class="form-control center-block" id="dateHigh" autofocus placeholder="dateHigh"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="capacity">Capacidad:</label><br>
                <input type="number" name="capacity" class="form-control center-block" required="required"  id="capacity" autofocus placeholder="capacidad"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="musicType">Tipo Musica:</label><br>
                <input type="text" name="musicaType" class="form-control center-block" id="musicType" autofocus placeholder="tipo musica"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="pubDj">Dj:</label><br>
                <input type="text" name="pubDj" class="form-control center-block" id="pubDj" autofocus placeholder="dj"></br>
                <input type="hidden" name="userType" class="form-control center-block" id="userType" autofocus ></br>
                <input type="hidden" name="action" class="form-control center-block" id="newPub" autofocus placeholder="pubId"></br>      
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Registrar
                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
            </div>
        </div>
    </body>
</html>
