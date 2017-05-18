<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    //conexion a la base de datos
    include '../admin/conexion.php';
    
    $prodId = $_POST["prodId"];
    $prodName = $_POST["prodName"];
    $prodSell = $_POST["prodSell"];
    $cantidad = $_POST['cantidad'];
    $stock = $_POST['stock'];
    
    if($_POST["action"] == "addToCart"){
    
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
                  <li class="divider"></li>
                  <li><a href="../logout.php">Desconectar</a></li>
                </ul>
                <nav class="s12 m12 l12 xl12">
                     <div class="col s12 m12 l12 xl12">
                        <!--<a href="#!" class="brand-logo">Logo</a>-->
                        <ul class="right">
                          <li><a href="index.php">Inicio</a></li>
                          <li><a href="cart.php">Mi Carrito</a></li
                          <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mi Cuenta<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                      </div>
                </nav>                                      
                <div class="col s12 m12 l12 xl12 blue lighten-5">
                    <!-- CARRITO DE COMPRA -->
                    <div class="collection">
                        <a href="#!" class="collection-item active"  id="btn_categ">Modifica Cantidad Carrito</a>   
                        <!-- añadir productos al carrito -->
                        <table class="responsive-table">
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                            <tr>
                            <form action="addedCart.php" method="post">
                                    <td>
                                        <input type="hidden" name="prodId" value="<?= $prodId ?>" readonly=""/>
                                        <input type="text" name="prodName" value="<?= $prodName ?>" readonly=""/>
                                    </td>                                                
                                    <td>
                                        <input type="number" name="prodSell" value="<?= $prodSell ?>" readonly=""/>
                                        <input type="hidden" name="stock" value="<?= $stock ?>"/>
                                    </td>
                                    <td>
                                        <input type="number" name="cantidad" value="1" min="1" autofocus="">                                          
                                        <input type="hidden" name="action" value="addedCart"/>
                                    </td>
                                    <td><button type="submit" class="btn-floating btn-small waves-effect waves-light green" value="addedCart"><i class="material-icons">done</i></button></td>
                                </form>
                            </tr>
                        </table>
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
<?php
    }                                                                              
?>