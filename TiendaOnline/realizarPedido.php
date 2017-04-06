<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    
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
                <h1>PEDIDO REALIZADO CORRECTAMENTE</h1>
                <h3>En menos de 3 horas el pedido se enviara a su destino</h3>
                <?php
                    //if($accion == "vaciarCarrito"){
                        foreach ($articulos as $clave => $elemento) {
                            $_SESSION['carrito'][$elemento['nombre']] = 0;                            
                        }
                        header("Refresh: 2; url=index.php");//esto redirecciona a otra pagina
                    //}                        
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
            </div>
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
    </body>
</html>