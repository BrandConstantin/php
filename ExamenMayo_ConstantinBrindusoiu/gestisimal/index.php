<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- css propio -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <meta name="author" content="BrandConstantin">
    </head>
    <body>
        <div class="container blue lighten-3">
            <div class="row">
                <div class="s12 m12 l12 xl12 red lighten-2">
                    <img id="logo" class="circle responsive-img" src="img/logo.jpeg"/>    
                    <h1>Tienda PcOnline</h1>
                </div>   
            </div>
            <div class="row col s12 m12 l12 xl12">
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                  <li class="divider"></li>
                  <li><a href="logout.php">Desconectar</a></li>
                </ul>
                <nav class="s12 m12 l12 xl12">
                     <div class="col s12 m12 l12 xl12">
                        <!--<a href="#!" class="brand-logo">Logo</a>-->
                        <ul class="right">
                          <li><a href="index.php">Inicio</a></li>
                          <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mi Cuenta<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                      </div>
                </nav>                      
                <h1>Inicia Sesión</h1>
                    <div class="col s10 m10 l10 xl10">
                      <form class="col s12 m12 l12 xl12 " method="post" action="login.php">
                        <div class="row">
                          <div class="input-field col s6">
                              <input id="first_name" name="userName" required="" type="text" class="validate">
                            <label for="first_name">Nombre Usuario</label>
                          </div>
                          <div class="input-field col s6">
                              <input id="last_name" name="userPass" required="" type="password" class="validate">
                            <label for="last_name">Contraseña</label>
                          </div>
                        </div>
                        <input type="hidden" name="login" value="action"/>
                        <button type="submit" class="btn-floating btn-small waves-effect waves-light green right" value="login"><i class="material-icons">done</i></button>
                      </form>
                    </div>
                    <div class="col s10 m10 l10 xl10">
                        <h5>Si no estas registrado, hazlo <a href="register.php">AQUI</a></h5>
                    </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2017 BrandConstantin
              <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
              </div>
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>