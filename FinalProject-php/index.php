<?php
    //if the session is iniciated, destroy
    if(session_start() == true){
        session_destroy();
    }
    
    //show a error
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    
    if(!isset($_SESSION['user']) && ($_SESSION['loqued'])){
        $_SESSION['user'] = " ";
        $_SESSION['loqued'] = false;
        $_SESSION['typeUser'] = " ";
    }
    
?>
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
    <link rel="shortcut icon" type="image/png" href="imagen/logo.png"/>
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
        $conexion = new mysqli("localhost", "root", "-");
        
        if ($conexion->connect_errno > 0) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $conexion->connect_error);
        } else {
            $conexion->select_db("crowded");
            $conexion->set_charset("utf8");
            $consulta = $conexion->query('SELECT userName, userPass, userType FROM user');
            $user = $consulta->fetch_object();
        }
        
        //realize a query
        $_SESSION['user'] = $_POST['user'];
        $passIntro = $_POST['pass'];
        
        while($userBD){
            if($user -> userName == $_SESSION['user'] && (($user -> userPass == $passIntro) && ($user -> userType == "admin"))){
                $_SESSION['loqued'] = true;
                $_SESSION['typeUser'] = $user -> userType;
                
                header("Refresh: 2; url=menu.php");
            }else if($user -> userName == $_SESSION['user'] && ($user -> userPass != $passIntro)){
                echo '<script>alert("Contraseña incorrecta!");</script>';
            }else if($user -> userName == $_SESSION['user'] && (($user -> userPass == $passIntro) && $user -> userType == "client")){
                $_SESSION['loqued'] = true;
                $_SESSION['typeUser'] = $user -> userType;
                
                header("Refresh: 2; uro=menu.php");
            }
        }
        ?>
        <div class="tituloLogin" class="col-xs-12 col-sm-8 col-md-12">
            <img src="img/logo.png" name="logo" alt="logo" width="350" >
        </div>

            <div id="login" class="col-xs-12 col-sm-12 col-md-12">
              <h1 style="margin-bottom: 50px;">Login</h1>
              <form action="redirect.php" method="POST">
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Usuario:</label><br>
                <input type="text" name="userName" class="form-control center-block" id="usuarioId" autofocus placeholder="usuario" value="<?=$_SESSION['userName']?>"></br>
                <span class="glyphicon glyphicon-lock"></span>
                <label for="userPass">Contraseña</label><br>
                <input type="password" class="form-control center-block" name="userPass" id="contrasenaId" placeholder="contraseña"></br></br>
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Sign in
                  <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
              <div class="registrar">
                <a href="signUp.php">¿No eres usuario?</a>
              </div>
          </div>
    </body>
</html>
