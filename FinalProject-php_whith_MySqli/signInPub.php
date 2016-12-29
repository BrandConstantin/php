<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <!--css propio-->
    <link href="css/style.css" rel="stylesheet"> 
    <script type="text/javascript" src="js/slidebox.js"></script>
  </head>
    <body>
        <div id="header">
            <div class="logo">
                <img src="img/logo.png" name="logo" alt="logo">
            </div>
            <ul id="listMenuIndex">
                <li class="mesageSesion">Alta pub:</li>
            </ul>   
        </div>
        <div id="container">
            <div id="slideshowUser">
                <div><img src="img/carousel/dark.jpg"></div>
                <div><img src="img/carousel/mixer.jpg"></div>
                <div><img src="img/carousel/audience.jpg"></div>
                <div><img src="img/carousel/dj.jpg"></div>
                <div><img src="img/carousel/live.jpg"></div>
                <div><img src="img/carousel/silhouette.jpg"></div>
            </div>
            <!-- entrar como pub -->
            <div id="register2">
                <div id="login2">
                    <h1>Inicia sesión</h1>
                    <form action="redirectPub.php" method="POST">
                      <label for="pubName">Pub:</label><br>
                      <input type="text" name="pubName" id="pubId" autofocus placeholder="nombre pub"></br>
                      <label for="pubPass">Contraseña</label><br>
                      <input type="password" name="pubPass" id="contrasenaId" placeholder="contraseña"></br></br>
                      <button type="submit" id="button2" name="action">Inicia sesión</button>
                    </form>
                    <div class="signUp2">
                        <a href="signUpPub.php">¿No estas registrado?<br>Hazlo AQUI!</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
