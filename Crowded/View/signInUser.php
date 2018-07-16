<?php
    /*/*if the session is initiate, destroyed
    if(session_start() == TRUE){
        session_destroy();
    }
    
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    
    if(!isset($_SESSION['user']) && !isset($_SESSION['logIn'])){
        $_SESSION['user'] = '';
        $_SESSION['logIn'] = false;
        $_SESSION['userType'] = '';
    }*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <!--bootstrap
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS de Bootstrap 
    <link href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--jquery-validade
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/funciones.js"></script>
    -->
    <!--css propio-->
    <link href="css/style.css" rel="stylesheet"> 
    <!-- css para media -->
    <!--<link href="View/css/media.css" rel="stylesheet">-->
  </head>
    <body>
        <?php
            /*compruve the conexion with the bd
            include '../Model/conectionBD.php';
            
            $userBD = $conection -> query('select userName, userPass, userType from user order by 1');
            
            $_SESSION['user'] = $_POST['user'];
            $writePass = $_POST['userPass'];
            
            while(($user = $userBD->fetchObject())){
                if($user->userName == $_SESSION['user'] && 
                        $user->userPass == $writePass &&
                        $user->userType == 'admin'){
                    $_SESSION['logIn'] = TRUE;
                    $_SESSION['userType'] = $user->userType;
                    
                    header('Refresh: 0; url=menuAdmin.php');
                }else if($user->userName == $_SESSION['user'] &&
                        $user->userPass != $writePass){
                    echo '<script>alert("Contraseña incorrecta!");</script>';
                }else if($user->userName != $_SESSION['user'] &&
                        $user->userPass == $writePass){
                    echo '<script>alert("Usuario incorrecto!");</script>';
                }else if($user->userName == $_SESSION['user'] &&
                        $user->userPass == $writePass &&
                        $user->userType == 'user'){
                    $_SESSION['logIn'] = TRUE;
                    $_SESSION['userType'] = $user->userType;
                    
                    header('Refresh: 0; url=menuUser.php');
                }
            }*/
                if($failUser){
            ?>
                <p>Usuario incorrecto, vuelve a intentarlo</p>
            <?php
                } else if($failPass) {
            ?>
                <p>Contraseña incorrecta, vuelve a intentarlo</p>
            <?php
                }
            ?>
        ?>
        <div id="container">
            <div id="header">
                <h1 id="shadow"><a href="../index.php">CROWDED</a></h1>
                <ul id="listMenuIndex">                    
                    <li><a href="signUp.php">Registrate</a></li>
                </ul>   
            </div>
            <div id="galery">
                <div id="slideshow">
                    <div><img src="img/disco/mixer.jpg"></div>
                </div>
                <div id="register">
                    <div id="login">
                        <h1>Inicia sesión</h1>
                        <form action="../Controller/userLogued.php" method="POST">
                          <span></span>
                          <label for="userName">Usuario:</label><br>
                          <input type="text" name="userName" id="usuarioId" value="<?=$_SESSION['user']?>" autofocus placeholder="nombre usuario"></br>
                          <span></span>
                          <label for="userPass">Contraseña</label><br>
                          <input type="password" name="userPass" id="contrasenaId" placeholder="contraseña"></br></br>
                          <button type="submit" name="action" style="background-color: #lightblue;">Inicia sesión
                          <span aria-hidden="true"></span>
                          </button>
                        </form>
                        <div class="signUp">
                            <a href="signUp.php">¿No estas registrado?<br>Hazlo AQUI!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="menu-footer">
                    <a href="#"><img src="img/icons/twitter.png" alt="twitter" name="twitter" width="52" height="52"></a>
                    <a href="#"><img src="img/icons/facebook.png" alt="facebook" name="facebook" width="52" height="52"></a>
                    <a href="#"><img src="img/icons/instagram.png" alt="instagram" name="instagram" width="52" height="52"></a>
                    <a href="#"><img src="img/icons/google-plus.png" alt="google" name="google" width="52" height="52"></a>        
                </div>
            <div class="copyright">© 2017. All Rights Reserved</div>        
        </div>
            <!-- script de ajax -->
            <script>
               /*     $("#formularioLogin").validate({
            rules: {
              usuario: {
                required: true
              },
              contraseña: {
                  required: true
              }
            },
            messages: {
              usuario: {
                required: "Usuario requerido"
              },
              contraseña: {
                required: "Contraseña requerida"
              }
            }*/
        });</script>
    </body>
</html>