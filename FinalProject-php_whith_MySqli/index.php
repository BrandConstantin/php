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
        <div class="tituloLogin" class="col-xs-12 col-sm-8 col-md-12">
            <img src="img/logo.png" name="logo" alt="logo" width="350" >
        </div>

            <div id="login" class="col-xs-12 col-sm-12 col-md-12">
              <h1 style="margin-bottom: 50px;">Login</h1>
              <form action="redirect.php" method="POST">
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Usuario:</label><br>
                <input type="text" name="userName" class="form-control center-block" id="usuarioId" autofocus placeholder="usuario"></br>
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
