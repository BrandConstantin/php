<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión

    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["acer" => 0, "asus" => 0, "hp" => 0, "msi" => 0, "samsung" => 0, "yamaha" => 0, "samsungj3" => 0, "samsungj5" => 0];
        //$_SESSION['total'] = 0;
    }
            
    //cupon descuento
    if(!isset($_SESSION['gastosEnvio'])){
        $_SESSION['gastosEnvio'] = 0;
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
                <?php
                    $total = 0;
                    
                    //sesión de los articulos mantenida abierta
                    $articulos = $_SESSION['articulos'];
                    
                    //carrito de la compra 
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
                            //
                            if($_GET['accion'] == 'gastosEnvio' && $total < 100){
                                $_SESSION['gastosEnvio'] = $_GET['gastosEnvio'];
                                $total += $_SESSION['gastosEnvio'];
                            }else{
                                $_SESSION['gastosEnvio'] = 0;
                            }
                            
                            if($total >= 300){
                                $descuento = $total * (10 / 100);
                                $total = $total - $descuento;
                                $porcentaje = 10;
                            }else{
                                $porcentaje = 0;
                                $descuento = 0;
                            }
                            
                                //pone el boton de realizar pedido y el de vaciarlo
                                if($opcionesCarrito == 1){
                            ?>
                            <tr>
                                <td colspan="4">
                                    <form action="finalizarPedido.php" method="get" style="text-align: center;">
                                        <h4>Gastos de envio:</h4><br>
                                        <select id="gastosEnvio" name="gastosEnvio" >
                                            <option value="10">España</option>
                                            <option value="20">Europa</option>
                                            <option value="40">Resto Del Mundo</option>
                                        </select>
                                        <input type="hidden" name="codigo" value="<?=$codigo?>">
                                        <input type="hidden" name="accion" value="gastosEnvio">
                                        <input id="btn1" type="submit" value="Ok">
                                    </form>
                                 </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <h4>Descuento: <?php echo $descuento; ?> € </br>
                                    Porcentaje: <?php echo $porcentaje; ?>% </br>
                                    Gastos de Envio: <?php echo $_SESSION['gastosEnvio']; ?> € </br>
                                    Total: <?php echo $total;?> €</h4>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <form action="index.php" method="GET">
                                        <input type="hidden" name="accion" value="vaciarCarrito">
                                        <input id="btn2" type="submit" value="Vaciar Cesta">
                                    </form>
                                </td>
                                <td colspan="2">
                                    <form action="realizarPedido.php" method="GET">
                                        <input type="hidden" name="codigo" value="<?=$codigo?>">
                                        <input type="hidden" name="accion" value="vaciarCarrito">
                                        <input id="btn1" type="submit" value="Finalizar">
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
            </div>
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
    </body>
</html>