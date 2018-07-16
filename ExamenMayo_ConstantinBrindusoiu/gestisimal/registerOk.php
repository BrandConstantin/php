<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                    <li><a href="#!">Mi Perfil</a></li>
                  <li><a href="#!">Mis Productos</a></li>
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
                <?php

                    require_once  './admin/conexion.php';

                    //recoger los datos de los usuarios
                    $userName = $_POST['userName'];
                    $userPass = $_POST['userPass'];
                    $userId = $_POST['userId'];
                    $cargo = $_POST['cargo'];
                    $registerOk = $_POST['registerOk'];

                    //$tableUsers = "users";
                    //$queryUsers = $connection->query("select * from $tableUsers where userName =\"$userName\" and userPass =\"$userPass\"");

                    //REALIZAR CONSULTA
                    if ($_POST['action'] == $registerOk) {
                        $findId = "SELECT userName FROM users WHERE userName = '".$_POST[userName]."'";
                        $queryRow = $connection->query($findId);

                        if ($queryRow->rowCount() == 1){ //si hay ya un nombre de user no te lo deja hacer
                            echo '<h1>Ya existe un usuario con ese nombre.</h1> <META HTTP-EQUIV = "Refresh" Content = "3; URL = register.php">';

                            //var_dump($queryRow);

                        }else{       
                            $insertRow = "INSERT INTO users (userName, userPass, cargo)"
                                . " VALUES(\"$_POST[userName]\", \"$_POST[userPass]\", \"user\")";

                            $connection->exec($insertRow);
                            echo '<h1 style="text-align:center">El registro ha sido un éxito.<META HTTP-EQUIV = "Refresh" Content = "3; '
                            . 'URL = index.php"></h1>';     

                            //var_dump($insertRow);
                        }
                     }
                    ?>
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