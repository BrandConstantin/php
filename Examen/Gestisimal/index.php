<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    include './conexion.php';
/*
    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["acer" => 0, "asus" => 0, "hp" => 0, "msi" => 0, "samsung" => 0, "yamaha" => 0, "samsungj3" => 0, "samsungj5" => 0];
        //$_SESSION['total'] = 0;
    }
            
    $_SESSION['gastosEnvio'] = 0;                       
      
    if(!isset($_SESSION['articulos'])){
        $_SESSION['articulos'] = array(
            $acer = array(
                //'key' => 'acer01pc',
                'nombre' => 'Acer',
                'precio' => 670,
                'imag' => 'img/acer.jpeg',
                'detalle' => 'CPU: AMD A4 5300; Grafica: ASUS GeForce GTX 960; RAM: 8Gb; Disco: Toshiba Canvio Basics;',
                'categoria' => "portatil",                
                'novedad' => 'no',
                'oferta' => 'si'),
            $asus = array(
                //'key' => 'asus01pc',
                'nombre' => 'Asus',
                'precio' => 770,
                'imag' => 'img/asus.jpeg',
                'detalle' => 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;',
                'categoria' => "portatil",                
                'novedad' => 'no',
                'oferta' => 'no'),
            $hp = array(
                //'key' => 'hp01pc',
                'nombre' => 'Hp',
                'precio' => 795,
                'imag' => 'img/hp.jpeg',
                'detalle' => 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;',
                'categoria' => "portatil",                
                'novedad' => 'no',
                'oferta' => 'no'),
            $msi = array(
                //'key' => 'msi01pc',
                'nombre' => 'Msi',
                'precio' => 1170,
                'imag' => 'img/msi.jpeg',
                'detalle' => 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;',
                'categoria' => "portatil",                
                'novedad' => 'si',
                'oferta' => 'no'),
            $samsung = array(
                //'key' => 'samsung01pc',
                'nombre' => 'Samsung',
                'precio' => 980,
                'imag' => 'img/samsung.jpeg',
                'detalle' => 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201',
                'categoria' => "portatil",                
                'novedad' => 'no',
                'oferta' => 'si'),
            $yamaha = array(
                //'key' => 'yamaha01voz',
                'nombre' => 'Yamaha',
                'precio' => 22,
                'imag' => 'img/yamaha.jpg',
                'detalle' => 'Potencia 120W, Frecuencia 34Mz ',
                'categoria' => "altavoces",                
                'novedad' => 'no',
                'oferta' => 'si'),
            $samsungj3 = array(
                //'key' => 'samsung01mob',
                'nombre' => 'Samsung J3',
                'precio' => 149,
                'imag' => 'img/j3.jpg',
                'detalle' => 'Procesador QuadCore 1,5Ghz, 8Gb, Camara 8Mp, Camara secundaria 5Mp ',
                'categoria' => "movil",                
                'novedad' => 'no',
                'oferta' => 'si'),
            $samsungj5= array(
                //'key' => 'samsung02mob',
                'nombre' => 'Samsung J5',
                'precio' => 219,
                'imag' => 'img/j5.jpg',
                'detalle' => 'Procesador QuadCore 1,5Ghz, 16Gb, Camara 13Mp, Camara secundaria 5Mp  ',
                'categoria' => "movil",                
                'novedad' => 'si',
                'oferta' => 'no'),
        );  
    }
    
    $articulos = $_SESSION['articulos'];*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="BrandConstantin">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img id="logo" src="img/logo.jpeg"/>    
                <h1>Tienda PcOnline</h1>
                <div id="menubar">
                    <ul id="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contactar</a></li>
                        <li><a href="#">Mi Cuenta</a></li>
                        <li><a href="#">Registrar</a></li>
                    </ul>
                    
                    <div id="search_box">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" nombre="user_query" placeholder="Buscar Producto" />
                            <!--<input type="submit" nombre="search" value="Buscar" />-->
                        </form>
                    </div>
                </div>
            </div>
            <div id="contentarea">
                <!--mostrar los articulos-->

            </div>
            <div id="sidebar">
                <div id="sidebar_title">Categorias:</div>
                <ul id="items">
                    <?php //getCats(); ?>
                </ul>
                <form action="portatiles.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="portatiles">
                    <input id="btn1" type="submit" value="Portatiles">
                </form> 
                <form action="moviles.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="moviles">
                    <input id="btn1" type="submit" value="Moviles">
                </form> 
                <form action="tablets.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="tablets">
                    <input id="btn1" type="submit" value="Tablets">
                </form> 
                <form action="altavoces.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="altavoces">
                    <input id="btn1" type="submit" value="Altavoces">
                </form> 
                <form action="novedades.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="novedad">
                    <input id="btn1" type="submit" value="Novedades">
                </form> 
                <form action="ofertas.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="ofertas">
                    <input id="btn1" type="submit" value="Ofertas">
                </form> 
            <hr>
            <hr>
                <div id="sidebar_title">Marcas:</div>
                <ul id="items">
                    <?php //getBrands(); ?>
                </ul>
                <form action="samsung.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="samsung">
                    <input id="btn1" type="submit" value="Samsung">
                </form>
                <form action="asus.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="asus">
                    <input id="btn1" type="submit" value="Asus">
                </form>
                <form action="acer.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="acer">
                    <input id="btn1" type="submit" value="Acer">
                </form>
                <form action="hp.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="hp">
                    <input id="btn1" type="submit" value="Hp">
                </form>
                <form action="msi.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="msi">
                    <input id="btn1" type="submit" value="Msi">
                </form>
                <form action="yamaha.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="yamaha">
                    <input id="btn1" type="submit" value="Yamaha">
                </form>
                <hr>
                <hr>
                <!--carrito de la compra -->

            <div id="carrito">
                <h4>Carrito</h4>
                <table id="table">
                    <tr>
                        <td>Producto</td>
                        <td>Cantidad</td>
                        <td colspan="2">Precio</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <form action="finalizarPedido.php" method="GET">
                                <input type="hidden" name="codigo" value="<?=$codigo?>">
                                <input type="hidden" name="accion" value="finalizar">
                                <input id="btn1" type="submit" value="Finalizar">
                            </form>
                        </td>
                        <td colspan="2">
                            <form action="vaciarCarrito.php" method="GET">
                                <input type="hidden" name="accion" value="vaciarCarrito">
                                <input id="btn2" type="submit" value="Vaciar Cesta">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><p style="text-align: center;">Carrito Vacio</p></td>
                    </tr>

                </table> <!--cierre de la tabla carrito-->
            </div><!--cierre carrito luego sidebar -->
            </div>
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>