<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión

    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["acer" => 0, "asus" => 0, "hp" => 0, "msi" => 0, "samsung" => 0, "yamaha" => 0, "samsungj3" => 0, "samsungj5" => 0];
        $_SESSION['gastosEnvio'] = 0;
        $_SESSION['total'] = 0;
    }
      
    if(!isset($_SESSION['productos'])){
        $_SESSION['productos'] = array(
            $acer = array(
                //'key' => 'acer01pc',
                'nombre' => 'Acer',
                'precio' => 670,
                'imag' => 'img/acer.jpeg',
                'detalle' => 'CPU: AMD A4 5300; Grafica: ASUS GeForce GTX 960; RAM: 8Gb; Disco: Toshiba Canvio Basics;',
                'categoria' => "computer",
                'oferta' => 'yes'),
            $asus = array(
                //'key' => 'asus01pc',
                'nombre' => 'Asus',
                'precio' => 770,
                'imag' => 'img/asus.jpeg',
                'detalle' => 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;',
                'categoria' => "computer",
                'oferta' => 'no'),
            $hp = array(
                //'key' => 'hp01pc',
                'nombre' => 'Hp',
                'precio' => 795,
                'imag' => 'img/hp.jpeg',
                'detalle' => 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;',
                'categoria' => "computer",
                'oferta' => 'no'),
            $msi = array(
                //'key' => 'msi01pc',
                'nombre' => 'Msi',
                'precio' => 1170,
                'imag' => 'img/msi.jpeg',
                'detalle' => 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;',
                'categoria' => "computer",
                'oferta' => 'no'),
            $samsung = array(
                //'key' => 'samsung01pc',
                'nombre' => 'Samsung',
                'precio' => 980,
                'imag' => 'img/samsung.jpeg',
                'detalle' => 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201',
                'categoria' => "computer",
                'oferta' => 'yes'),
            $yamaha = array(
                //'key' => 'yamaha01voz',
                'nombre' => 'Yamaha',
                'precio' => 345,
                'imag' => 'img/yamaha.jpg',
                'detalle' => 'Potencia 120W, Frecuencia 34Mz ',
                'categoria' => "others",
                'oferta' => 'yes'),
            $samsungj3 = array(
                //'key' => 'samsung01mob',
                'nombre' => 'Samsung J3',
                'precio' => 149,
                'imag' => 'img/j3.jpg',
                'detalle' => 'Procesador QuadCore 1,5Ghz, 8Gb, Camara 8Mp, Camara secundaria 5Mp ',
                'categoria' => "others",
                'oferta' => 'yes'),
            $samsungj5= array(
                //'key' => 'samsung02mob',
                'nombre' => 'Samsung J5',
                'precio' => 219,
                'imag' => 'img/j5.jpg',
                'detalle' => 'Procesador QuadCore 1,5Ghz, 16Gb, Camara 13Mp, Camara secundaria 5Mp  ',
                'categoria' => "others",
                'oferta' => 'no'),
        );  
    }
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
                        <li><a href="#">Inicio</a></li>
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
                foreach ($_SESSION['productos'] as $key => $value) {
                ?>
                    <div class="products">
                            <a name="<?=$key?>"></a>
                            <img src="<?= $value['imag'] ?>"><br>
                            <h4><?= $value['nombre'] ?></h4><br>
                            <h4>Price: <?= $value['precio'] ?> €</h4></br>

                            <form action="index.php?key=<?= $key ?>" method="post">
                                <input type="hidden" name="key" value="<?= $key ?>">
                                <input type="hidden" name="action" value="comprar">                          
                                <input id="btn1" type="submit" value="Comprar">
                            </form></br>
                            <form action="detalle.php" method="post">
                                <input type="hidden" name="key" value="<?= $key ?>">
                                <input type="hidden" name="action" value="detalle">                          
                                <input id="btn1" type="submit" value="Detalle">
                            </form><br>
                    </div>
                    <?php
                    }
                    ?> 
            </div>
            <div id="sidebar">
                <div id="sidebar_title">Categorias:</div>
                <ul id="items">
                    <?php //getCats(); ?>
                </ul>
                <form action="portatiles.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="portatiles">
                    <input id="btn1" type="submit" value="Portatiles">
                </form> 
                <form action="moviles.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="moviles">
                    <input id="btn1" type="submit" value="Moviles">
                </form> 
                <form action="tablets.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="tablets">
                    <input id="btn1" type="submit" value="Tablets">
                </form> 
                <form action="altavoces.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="altavoces">
                    <input id="btn1" type="submit" value="Altavoces">
                </form> 
            <hr>
            <hr>
                <div id="sidebar_title">Marcas:</div>
                <ul id="items">
                    <?php //getBrands(); ?>
                </ul>
                <form action="samnsung.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="samnsung">
                    <input id="btn1" type="submit" value="Samnsung">
                </form>
                <form action="asus.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="asus">
                    <input id="btn1" type="submit" value="Asus">
                </form>
                <form action="acer.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="acer">
                    <input id="btn1" type="submit" value="Acer">
                </form>
                <form action="hp.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="hp">
                    <input id="btn1" type="submit" value="Hp">
                </form>
                <form action="msi.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="msi">
                    <input id="btn1" type="submit" value="Msi">
                </form>
                <form action="yamaha.php" method="GET" style="text-align: center;">
                    <input type="hidden" name="accion" value="yamaha">
                    <input id="btn1" type="submit" value="Yamaha">
                </form>
                <hr>
                <hr>
                <!--carrito de compras-->
                <?php
                    $key = $_GET['key'];
                    $accion = $_GET['accion'];
                    
                    if($accion == "comprar"){
                        $_SESSION['carrito'][$key]++;
                    }
                    
                    if(($accion == "eliminar") && ($_GET['confirmEliminar'] == "si")){
                        $_SESSION['carrito'][$key] = 0;
                    }
                    
                    if(($accion ==  "vaciar") && ($_GET['confirmEliminar'] == "si")){
                        foreach ($articulos as $key => $value) {
                            $_SESSION['carrito'][$value["nombre"]] = 0;
                        }
                    }
                    
                    if($accion == "modificaCantidad"){
                        $_SESSION['carrito'][$key] = $_GET['cantidad'];
                    }
                    
                    $total = 0;
                ?>
                <div id="carrito">
                    <table>
                        <?php
                        foreach ($_SESSION['productos'] as $key => $value) {
                            //if($_SESSION['carrito'][$key] > 0){
                              //  $total = $total + ($_SESSION['carrito'][$key] * $value['precio']);
                        ?>
                        <tr>
                            
                                <div>
                                    <form action="index.php" method="GET">
                                        <label for="cantidad">Cantidad:</label>
                                        <input type="number" id="cantidad" name="cantidad" value="<?= $_SESSION['carrito'][$key]; ?>" min="0" max="99" style="width: 35px; margin-bottom: 5px;" >
                                        <input type="hidden" name="key" value="<?= $key; ?>">
                                        <input type="hidden" name="accion" value="modificarCantidad">
                                        <input type="submit" value="Ok" class="botonDetalles">
                                    </form>
                                    <img src="<?= $value['imag']; ?>" width="160px" border="1">
                                </div><br> <!-- cierre div imagnes -->
                                <b>Nombre:</b> <?= $value['nombre']; ?> </br> 
                                <b>Precio:</b> <?= $value['precio']; ?> €</br>
                                <form action="confirmarBorrado.php" method="GET">
                                    <input type="hidden" name="codigo" value="<?= $key; ?>">
                                    <input type="hidden" name="accion" value="eliminar">
                                    <input type="submit" value="Eliminar" class="botonEliminar">
                                </form>
                            
                        </tr>
                        <?php
                            $opcionesCarrito = 1;
                            //}
                        }

                            //pone el boton de realizar pedido y el de vaciarlo
                            if($opcionesCarrito == 1){
                        ?>
                        <tr>
                            <td><p>Total: <?php echo $total; ?> €</p></td>
                        </tr>
                        <tr>
                            <td>
                                <form action="realizarPedido.php" method="GET">
                                    <input type="hidden" name="codigo" value="<?= $key ?>">
                                    <input type="hidden" name="accion" value="vaciarCarrito">
                                    <input type="submit" value="Realizar pedido" class="realizarPedido" >
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form action="confirmarBorrado.php" method="GET">
                                    <input type="hidden" name="accion" value="vaciarCarrito">
                                    <input type="submit" value="Vaciar Cesta">
                                </form>
                            </td>
                        </tr>
                        <?php
                            } else {
                        ?>
                        <tr>
                            <td><h4 style="text-align: center;">Carrito Vacio</h4></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table> <!--cierre de la tabla carrito-->
                <div>
                
            </div>
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
    </body>
</html>