<!DOCTYPE html>
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
    <!-- css para media -->
    <link href="css/media.css" rel="stylesheet">
    <script type="text/javascript" src="js/slidebox.js"></script>
  </head>
    <body>
        <div id="header">
            <h1 id="shadow"><a href="index.php">CROWDED</a></h1>
            <ul id="listMenuIndex">
                <li><a href="signInUser.php">Usuario</a></li>
                <li><a href="signInPub.php">Pub</a></li>
                <li class="mesageSesion">Inicia sesión:</li>
            </ul>   
        </div>
        <div id="container">
            <div id="register">
                <div id="login">
                    <h1>Pub</h1>
                    <form action="redirectPub.php" method="POST">
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
                        <a href="signUpPub.php">¿No estas registrado?<br>Hazlo AQUI!</a>
                    </div>
                    <hr>
                    <h1>Usuario</h1>
                    <form action="redirectUser.php" method="POST">
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
                        <a href="signUpClient.php">¿No estas registrado?<br>Hazlo AQUI!</a>
                    </div>
                </div>
            </div>
            <div id="galery">
                <div id="slideshow" class="img-responsive">
                    <div><img src="img/disco/dark.jpg"></div>
                    <div><img src="img/disco/mixer.jpg"></div>
                    <div><img src="img/disco/audience.jpg"></div>
                    <div><img src="img/disco/dj.jpg"></div>
                </div>
            </div>
        </div>
    </body>
</html>
