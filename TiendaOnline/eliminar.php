<?php
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
/*
    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["acer" => 0, "asus" => 0, "hp" => 0, "msi" => 0, "samsung" => 0, "yamaha" => 0, "samsungj3" => 0, "samsungj5" => 0];
        //$_SESSION['total'] = 0;
    }
*/
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
            <h1>Eliminar producto</h1>
            <p>Estas seguro de que quieres eliminar el producto?</p>
                <!--mostrar los articulos-->
                    <?php
                    $codigo = $_GET['codigo'];    
                    $articulos = $_SESSION['articulos'];
                    $elemento = $articulos[$codigo];
                    //$novedad = $_SESSION['novedad'];
                    
                    //foreach ($articulos as $clave => $elemento) {
                       // if(($elemento['nombre'] == 'Acer')){
                    ?>
                    <div class="products">
                        <img src="<?=$elemento['imag']?>" width="160px" height="160px" border="1"><br>
                        <h4>Nombre: <?=$elemento['nombre']?> </h4r> 
                        <h4>Precio: <?=$elemento['precio']?> €</h4>
                        <h4>Unidades: <?=$_SESSION['carrito'][$codigo]; ?> uds</h4>
                        
                        <form action="index.php" method="GET">
                            <input type="hidden" name="codigo" value="<?= $clave?>">
                            <input type="hidden" name="accion" value="eliminar">
                            <input id="btn2" type="submit" value="Eliminar">
                        </form>
                    </div>
                    <?php
                        //}
                    //} //cierre del foreach
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
            </div>
        </div>
    </body>
</html>