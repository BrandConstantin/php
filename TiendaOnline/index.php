<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión

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
                'oferta' => 'si'),
            $asus = array(
                //'key' => 'asus01pc',
                'nombre' => 'Asus',
                'precio' => 770,
                'imag' => 'img/asus.jpeg',
                'detalle' => 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;',
                'categoria' => "portatil",
                'oferta' => 'no'),
            $hp = array(
                //'key' => 'hp01pc',
                'nombre' => 'Hp',
                'precio' => 795,
                'imag' => 'img/hp.jpeg',
                'detalle' => 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;',
                'categoria' => "portatil",
                'oferta' => 'no'),
            $msi = array(
                //'key' => 'msi01pc',
                'nombre' => 'Msi',
                'precio' => 1170,
                'imag' => 'img/msi.jpeg',
                'detalle' => 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;',
                'categoria' => "portatil",
                'oferta' => 'no'),
            $samsung = array(
                //'key' => 'samsung01pc',
                'nombre' => 'Samsung',
                'precio' => 980,
                'imag' => 'img/samsung.jpeg',
                'detalle' => 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201',
                'categoria' => "portatil",
                'oferta' => 'si'),
            $yamaha = array(
                //'key' => 'yamaha01voz',
                'nombre' => 'Yamaha',
                'precio' => 22,
                'imag' => 'img/yamaha.jpg',
                'detalle' => 'Potencia 120W, Frecuencia 34Mz ',
                'categoria' => "altavoces",
                'oferta' => 'si'),
            $samsungj3 = array(
                //'key' => 'samsung01mob',
                'nombre' => 'Samsung J3',
                'precio' => 149,
                'imag' => 'img/j3.jpg',
                'detalle' => 'Procesador QuadCore 1,5Ghz, 8Gb, Camara 8Mp, Camara secundaria 5Mp ',
                'categoria' => "movil",
                'oferta' => 'si'),
            $samsungj5= array(
                //'key' => 'samsung02mob',
                'nombre' => 'Samsung J5',
                'precio' => 219,
                'imag' => 'img/j5.jpg',
                'detalle' => 'Procesador QuadCore 1,5Ghz, 16Gb, Camara 13Mp, Camara secundaria 5Mp  ',
                'categoria' => "movil",
                'oferta' => 'no'),
        );  
    }
    
    $articulos = $_SESSION['articulos'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
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
                            <input type="submit" nombre="search" value="Buscar" />
                        </form>
                    </div>
                </div>
            </div>
            <div id="contentarea">
                <!--mostrar los articulos-->
                    <?php
                    foreach ($articulos as $clave => $elemento) {
                    ?>
                    <div class="products">
                        <img src="<?=$elemento['imag']?>" width="160px" height="160px" border="1"><br>
                        <h4>Nombre: <?=$elemento['nombre']?> </h4r> 
                        <h4>Precio: <?=$elemento['precio']?> €</h4>

                        <form action="detalle.php" method="get" >
                            <input type="hidden" name="codigo" value="<?=$clave?>">
                            <input type="hidden" name="accion" value="detalles">
                            <input id="btn1" type="submit" value="Detalles" class="botonDetalles">
                        </form>
                        <form action="index.php" method="GET">
                            <input type="hidden" name="codigo" value="<?= $clave?>">
                            <input type="hidden" name="accion" value="comprar">
                            <input id="btn1" type="submit" value="Comprar" class="botonComprar">
                        </form>
                    </div>
                    <?php
                    } //cierre del foreach
                    ?>
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
            <hr>
            <hr>
                <div id="sidebar_title">Marcas:</div>
                <ul id="items">
                    <?php //getBrands(); ?>
                </ul>
                <form action="samnsung.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="action" value="samnsung">
                    <input id="btn1" type="submit" value="Samnsung">
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
            <?php
                $codigo = $_GET['codigo'];
                $accion = $_GET['accion'];
                
                if($accion == "comprar"){
                    $_SESSION['carrito'][$codigo]++;
                }
                
                if($accion == "eliminar" && $_GET['confirmacionDelete'] == "si"){
                    $_SESSION['carrito'][$codigo] = 0;
                }
                
                if($accion == "vaciarCarrito" && $_GET['confirmacionDelete'] == "si"){
                    foreach ($articulos as $clave => $elemento) {
                        $_SESSION['carrito'][$elemento['nombre']] = 0;
                    }
                }
                
                if($accion == "modificarCantidad"){
                    $_SESSION['carrito'][$codigo] = $_GET['cantidad'];
                }
                $total = 0;
            ?>
            <div id="carrito">
                <h4>Carrito</h4>
                <table id="table">
                    <?php
                    foreach ($articulos as $codigo => $elemento) {
                        if($_SESSION['carrito'][$codigo] > 0){
                            $total = $total + ($_SESSION['carrito'][$codigo] * $elemento['precio']);
                    ?>
                    <tr>
                        <td>Producto</td>
                        <td>Cantidad</td>
                        <td colspan="2">Precio</td>
                    </tr>
                    <tr>
                        <td> 
                            <img src="<?=$elemento['imag']?>" width="160px" border="1"><br>
                             <?=$elemento['nombre']?>
                        </td>
                        <td>
                            <form action="index.php" method="GET">
                                    <input type="number" id="cantidad" name="cantidad" value="<?= $_SESSION['carrito'][$codigo]; ?>" min="0" max="99" style="width: 35px; margin-bottom: 5px;" >
                                    <input type="hidden" name="codigo" value="<?=$codigo?>">
                                    <input type="hidden" name="accion" value="modificarCantidad">
                                    <input id="ok" type="submit" value="Ok">
                            </form>
                        </td>
                        <td><h4><?=$elemento['precio']?> €</h4></td>
                        <td>
                            <form action="confirmarBorrado.php" method="GET">
                                <input type="hidden" name="codigo" value="<?=$codigo?>">
                                <input type="hidden" name="accion" value="eliminar">
                                <input id="btn2" type="submit" value="X">
                            </form>
                        </td>
                    </tr>
                    <?php
                        $opcionesCarrito = 1;
                        }
                    }//cierre foreach
                        //pone el boton de realizar pedido y el de vaciarlo
                        if($opcionesCarrito == 1){
                    ?>
                    <tr>
                        <td colspan="4"><h3>Total: <?php echo $total; ?> €</h3></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form action="finalizarPedido.php" method="GET">
                                <input type="hidden" name="codigo" value="<?=$codigo?>">
                                <input type="hidden" name="accion" value="vaciarCarrito">
                                <input id="btn1" type="submit" value="Finalizar">
                            </form>
                        </td>
                        <td colspan="2">
                            <form action="confirmarBorrado.php" method="GET">
                                <input type="hidden" name="accion" value="vaciarCarrito">
                                <input id="btn2" type="submit" value="Vaciar Cesta">
                            </form>
                        </td>
                    </tr>
                    <?php
                        } else {
                    ?>
                    <tr>
                        <td><p style="text-align: center;">Carrito Vacio</p></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table> <!--cierre de la tabla carrito-->
            </div><!--cierre carrito luego sidebar -->
            </div>
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
    </body>
</html>