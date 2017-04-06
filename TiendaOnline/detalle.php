<?php
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión

    //inicializa el carrito a cero
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = ["acer" => 0, "asus" => 0, "hp" => 0, "msi" => 0, "samsung" => 0, "yamaha" => 0, "samsungj3" => 0, "samsungj5" => 0];
        //$_SESSION['total'] = 0;
    }
    
    $codProd = $_POST['codProd'];
    
    if($codProd == "asus"){
        echo $name  = "Asus";
        echo $imag = "img/asus.jpeg";

        ?>
        <img src="<?= $imag ?>">
        <p>Ideal para estudiantes</p>
       <?php 
    } else if ($codProd == "acer"){
        $name  = "Acer";
        $imag = "img/acer.jpeg";
                        ?>
                <p>Ideal para cualquiera!</p>
                <?php 
    } else if ($codProd == "hp"){
        $name  = "hp";
        $imag = "img/hp.jpeg";
                                ?>
                <p>Ideal para editores video</p>
                <?php 
    } else if ($codProd == "msi"){
        $name  = "Msi";
        $imag = "img/msi.jpeg";
                                ?>
                 <p>Ideal para gamars</p>
                <?php
    } else if ($codProd == "samsung"){
        $name  = "Samsung";
        $imag = "img/samsung.jpeg";
                        ?>
                 <p>Ideal para quien busca algo con grandes prestaciones</p>
                <?php
    }else if ($codProd == "yamaha"){
        $name  = "Yamaha";
        $imag = "img/yamaha.jpg";
    }else if ($codProd == "samsung j3"){
        $name  = "Samsung J3";
        $imag = "img/j3.jpg";
    }else if ($codProd == "samsung j5"){
        $name  = "Samsung j5";
        $imag = "img/j5.jpg";
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
                //sesión de los articulos mantenida abierta
                $articulos = $_SESSION['articulos'];

                //carrito de la compra 
                    $codigo = $_GET['codigo'];
                    $accion = $_GET['accion'];
                ?>
                <div id="carrito">
                    <h4>Detalles producto</h4>
                    <table id="table">
                        <?php
                        foreach ($articulos as $codigo => $elemento) {
                            if($codigo == $elemento['nombre']){                               
                        ?>
                        <tr>
                            <td colspan="2"> 
                                <img style="width:400px; height: 300px" src="<?=$elemento['imag']?>" width="160px" border="1"><br>
                            </td>
                            <td colspan="2">
                                <h4>Nombre: <?=$elemento['nombre']?></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Precio: <?=$elemento['precio']?></h4>
                            </td>                            
                            <td>
                                <h4>Detalle: <?=$elemento['detalle']?></h4>
                            </td>                            
                            <td>
                                <h4>Oferta: <?=$elemento['oferta']?></h4>
                            </td>
                            <td><h4><?=$elemento['precio']?> €</h4></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <form action="index.php" method="GET">
                                    <input type="hidden" name="codigo" value="<?=$codigo?>">
                                    <input type="hidden" name="accion" value="vaciarCarrito">
                                    <input id="btn1" type="submit" value="Comprar">
                                </form>
                            </td>
                        </tr>
                        <?php
                            }
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
