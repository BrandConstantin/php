<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    
    $_POST['prodId'];
    $_POST['prodName'];
    $_POST['prodDesc'];
    $_POST['prodBuy'];
    $_POST['prodSell'];
    $_POST['stock'];
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
                  <li><a href="#!">Desconectar</a></li>
                </ul>
                <nav class="s12 m12 l12 xl12">
                     <div class="col s12 m12 l12 xl12">
                        <!--<a href="#!" class="brand-logo">Logo</a>-->
                        <ul class="right">
                          <li><a href="index.php">Inicio</a></li>
                          <li><a href="#">Productos</a></li>
                          <li><a href="#">Registrar</a></li
                          <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mi Cuenta<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                      </div>
                </nav>                      
                <div class="col s5  m4 l2 xl2 red lighten-2">                    
                    <div class="collection">
                        <a href="#!" class="collection-item active">Categorias</a>
                        <a href="#!" class="collection-item">Alvin</a>
                        <a href="#!" class="collection-item">Alvin</a>
                    </div>                
                </div>
                <div class="col s7 m8 l10 xl10 blue lighten-5">
                    <?php
                        //conexion a la base de datos
                        include './conexion.php';
                        
                        //seleccionamos todo lo que se envio por formulario
                        $consulta = $connection->query("select * from products where prodId =". $_POST['prodId']);
                                if($consulta->rowCount() > 0){
                                    ?>
                                    El producto ya existe en la base de datos!
                                    <a href="index.php">Volver</a>
                                    <?php
                                }else{
                                    //se inserte el producto
                                    $insert = "insert into products (prodId, prodName, prodDesc, prodBuy, prodSell, stock) "
                                            . " values('$_POST[prodId]', '$_POST[prodName]', '$_POST[prodDesc]', '$_POST[prodBuy]', '$_POST[prodSell]', '$_POST[stock]')";
                                    
                                    $connection->exec($insert);
                                    echo "Producto insertado correctamente";
                                    header('Location: index.php');
                                }
                    ?>
                </div>
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>