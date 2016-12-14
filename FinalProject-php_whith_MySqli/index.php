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
        <div class="title">
            <h1 class="titleShadow">CROWDED</h1>
        </div>
        
        <div id="principal">
            <!-- registrarse como usuario -->
            <div id="login">
              <h1>Login Pub</h1>
              <form action="redirect.php" method="POST">
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Pub:</label><br>
                <input type="text" name="userName" class="form-control center-block" id="usuarioId" autofocus placeholder="nombre pub"></br>
                <span class="glyphicon glyphicon-lock"></span>
                <label for="userPass">Contraseña</label><br>
                <input type="password" class="form-control center-block" name="userPass" id="contrasenaId" placeholder="contraseña"></br></br>
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Inicia sesión
                  <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
              <div class="signUp">
                <a href="signUpPub.php">¿No estas registrado como pub?</a>
              </div>
            </div>

            <!-- registrarse como local -->
            <div id="login">
              <h1>Login Usuario</h1>
              <form action="redirect.php" method="POST">
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Usuario:</label><br>
                <input type="text" name="userName" class="form-control center-block" id="usuarioId" autofocus placeholder="nombre usuario"></br>
                <span class="glyphicon glyphicon-lock"></span>
                <label for="userPass">Contraseña</label><br>
                <input type="password" class="form-control center-block" name="userPass" id="contrasenaId" placeholder="contraseña"></br></br>
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Inicia sesión
                  <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
              <div class="signUp">
                <a href="signUpClient.php">¿No estas registrado como usuario?</a>
              </div>
            </div>
        </div>
    </body>
</html>
