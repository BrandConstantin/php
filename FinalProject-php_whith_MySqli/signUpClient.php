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
        <div class="logo">
            <img src="img/logo.png" name="logo" alt="logo">
        </div>
        <div id="principal2">
            <div id="loginReg">
              <h1>Registrate:</h1>
              <form action="signUpClientAction.php" method="post">
                <input type="hidden" name="userId" class="form-control center-block" id="userId" autofocus placeholder="userId"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="userPhoto">Foto:</label><br>
                <input type="texto" name="userPhoto" class="form-control center-block" id="userPhoto" autofocus placeholder="foto usuario"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Nombre:</label><br>
                <input type="text" name="userName" class="form-control center-block" required="required"  id="userName" autofocus placeholder="nombre usuario"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="userPass">Contraseña:</label><br>
                <input type="password" name="userPass" class="form-control center-block" required="required"  id="userPass" autofocus placeholder="contraseña"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="userEmail">Correo:</label><br>
                <input type="email" name="userEmail" class="form-control center-block" required="required"  id="userEmail" autofocus placeholder="correo"></br>
                <input type="hidden" name="userType" class="form-control center-block" id="userType" autofocus placeholder="userType"></br>
                <input type="hidden" name="dateHigh" class="form-control center-block" id="dateHigh" autofocus placeholder="dateHigh"></br>
                <span class="glyphicon glyphicon-user"></span>
                <label for="city">Ciudad:</label><br>
                <input type="text" name="city" class="form-control center-block" id="city" autofocus placeholder="ciudad"></br>
                <input type="hidden" name="action" class="form-control center-block" id="newUser" autofocus placeholder="userId"></br>      
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Registrar
                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
            </div>
        </div>
    </body>
</html>
