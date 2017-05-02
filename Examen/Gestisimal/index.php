<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    include './conexion.php';
?>
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
        <div class="container blue lighten-5">
            <div class="row">
                <div class="s12 m12 l12 xl12 blue darken-5">
                    <img id="logo" class="circle responsive-img" src="img/logo.jpeg"/>    
                    <h1>Tienda PcOnline</h1>
                </div>   
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!">Mi Perfil</a></li>
                  <li><a href="#!">Mis Productos</a></li>
                  <li class="divider"></li>
                  <li><a href="#!">Desconectar</a></li>
                </ul>
                <nav>
                  <div class="nav-wrapper">
                    <!--<a href="#!" class="brand-logo">Logo</a>-->
                    <ul class="right hide-on-med-and-down">
                      <li><a href="index.php">Inicio</a></li>
                      <li><a href="#">Productos</a></li>
                      <li><a href="#">Registrar</a></li
                      <!-- Dropdown Trigger -->
                      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mi Cuenta<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                  </div>
                </nav>                      
                <div class="col s3 col s12 m4 l3 red lighten-2">                    
                    <div class="collection">
                        <a href="#!" class="collection-item active">Categorias</a>
                        <a href="#!" class="collection-item">Alvin</a>
                        <a href="#!" class="collection-item">Alvin</a>
                    </div>                
                </div>
                <div class="col s12 m8 l9 blue lighten-5">
                contenido web
                </div>
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>