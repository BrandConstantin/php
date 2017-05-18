<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    //conexion a la base de datos
    include '../admin/conexion.php';
    
    $prodId = $_POST["prodId"];
    $prodName = $_POST["prodName"];
    $prodSell = $_POST["prodSell"];
    $stock = $_POST['stock'];
    $cantidad = $_POST['cantidad'];   
    
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
                    <?php
                    /*if( ($_POST['action'] == 'addedCart')){
                        //disminuir la cantidad de productos de la bd
                        $decrease = ( $_POST[stock] - $_POST[cantidad] );                           

                        if($decrease >= 0){
                            $decreated = "update products set stock = \"$decrease\" where prodId = '".$_POST[prodId]."'";                           
                            $connection->exec($decreated);

                            if(!array_key_exists($_POST[prodId], $cart)){
                                //array que recoje los datos del producto comprado del formulario
                                $newCart = [
                                    $_POST[prodId]=>[
                                        'prodId' => $_POST[prodId],
                                        'prodName' => $_POST[prodName],
                                        'prodSell' => $_POST[prodSell],
                                        'stock' => $_POST[stock],
                                        'cantidad' => $_POST[cantidad],
                                    ]
                                ];
                                //inserta el array $addCart en $cart
                                $cart[$_POST[prodId]] = $newCart[$_POST[prodId]];
                                $_SESSION['cart'] = $cart;
                            }else{
                                //si el producto existe en $cart se incrementa su cantidad
                                $cart[$_POST[prodId]][cantidad] += $_POST[cantidad];
                            }

                            var_dump($cart);
                            echo $cart;
                            echo $cantidad;
                            echo '<h1>Producto añadido al carrito.</h1><META HTTP-EQUIV = "Refresh" Content = "10; URL = indexUsu.php">';
                        }else{
                            //si no hay stock suficiente , no se añade al carrito
                            echo '<p>Lo sentimos, el stock disponible es inferior a la cantidad demandada! '
                            . '</p><META HTTP-EQUIV = "Refresh" Content = "10; URL = indexUsu.php">';
                        }
                         var_dump($cart);
                            echo $cart;
                            echo $cantidad;
                    }*/
                    ?>
                    <?php
                    if( ($_POST['action'] == 'addedCart')){
                        //disminuir la cantidad de productos de la bd
                        $decrease = ( $_POST[stock] - $_POST[cantidad] );                           

                        if($decrease >= 0){
                            $decreated = "update products set stock = \"$decrease\" where prodId = '".$_POST[prodId]."'";                           
                            $connection->exec($decreated);

                            if (isset($_SESSION['cart'])){
                                if(!array_key_exists($_POST['prodId'], $_SESSION['cart'])){
                                    $id = $_POST['prodId'];

                                    $_SESSION['cart'] += array( $_POST['prodId'] => array($_POST['prodName'], $_POST['prodSell'], $_POST['cantidad']));
                                    //inserta el array $addCart en $cart
                                    //$cart[$_POST[prodId]] = $newCart[$_POST[prodId]];
                                }else{
                                    //si el producto existe en $cart se incrementa su cantidad
                                    $_SESSION['cart'][$_POST['prodId']][2] += $_POST['cantidad'];
                                }                        
                            }else{
                              $_SESSION['cart'] = array( $_POST['prodId'] => array($_POST['prodName'], $_POST['prodSell'], $_POST['cantidad']));
                            }

                            //var_dump($_SESSION['cart']);
                            echo '<h1>Producto añadido al carrito.</h1><META HTTP-EQUIV = "Refresh" Content = "5; URL = index.php">';
                            //
                        }else{
                            //si no hay stock suficiente , no se añade al carrito
                            echo '<h1>Lo sentimos, el stock disponible es inferior a la cantidad demandada! </h1>'
                            . '<META HTTP-EQUIV = "Refresh" Content = "5; URL = index.php">';
                        }
                    }
                    ?>
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