<?php
    session_start();
    if(!isset($_SESSION['productos'])){
        $_SESSION['productos'] = array(
            $acer = array(
                'nombre' => 'Acer',
                'precio' => 670,
                'img' => 'img/acer.jpeg',
                'detalle' => 'CPU: AMD A4 5300; Grafica: ASUS GeForce GTX 960; RAM: 8Gb; Disco: Toshiba Canvio Basics;'),
            $asus = array(
                'nombre' => 'Asus',
                'precio' => 770,
                'img' => 'img/asus.jpeg',
                'detalle' => 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;'),
            $hp = array(
                'nombre' => 'Hp',
                'precio' => 795,
                'img' => 'img/hp.jpeg',
                'detalle' => 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;'),
            $msi = array(
                'nombre' => 'Msi',
                'precio' => 1170,
                'img' => 'img/msi.jpeg',
                'detalle' => 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;'),
            $samsung = array(
                'nombre' => 'Samsung',
                'precio' => 980,
                'img' => 'img/samsung.jpeg',
                'detalle' => 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201'),
        );

        $_SESSION['carrito'] = [];
        $_SESSION['precio'] = 0;

    } else {
        if(isset($_GET["vaciarCarrito"])){                   
            //session_destroy();
            //div("refresh: 0.1;");
            
            foreach ($_SESSION['carrito'] as $key => $value) {
                unset($_SESSION['carrito']['precio']);
            }
            
            $_SESSION['precio'] = 0;
        } else {
            $codigoProd = $_GET['codigoProd'];
            $codigoEliminado = $_GET['codigoEliminado'];
            
            if($codigoProd != null){
                $_SESSION['carrito'][$codigoProd]++;
                $_SESSION['precio'] = $_SESSION['productos'][$codigoProd]['precio'] + $_SESSION['precio'];
            }
            
            if(($codigoEliminado != null) && ($_SESSION['carrito'][$codigoEliminado] > 0)){
                $_SESSION['carrito'][$codigoEliminado]--;
                $_SESSION['precio'] = $_SESSION['precio'] - $_SESSION['productos'][$codigoEliminado]['precio'];
            }
            
            if(isset($_GET['descuento'])){
                   $codigoElegido = $_GET['descuento'];
                if($codigoElegido == "0102"){
                    $_SESSION['precio'] = $_SESSION['precio'] - 70;
                }
            }
        }                
    }       
?>
<!DOCTYPE html>
<!--
Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada
uno de los productos del catálogo deberá tener un botón Detalle que, al ser accionado, debe llevar
al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión.
Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="cabecera">
            <img src="img/logo.jpeg" id="imgCabecera">
            <h1>Venta Pc On-line</h1>
            <form action="index.php" method="get" id="vaciarCarrito">
                <input type="hidden" name="vaciarCarrito" value="vaciar">
                <input type="submit" value="Vaciar Carrito">
            </form>
            <form id="finalizar" action="finalizarPedido.php" method="get">
                    <input type="submit" value="Finalizar Compra">
            </form>      
            <form action="index.php" method="get" id="descuento">
                Codigo promocional<br>
                <input type="text" placeholder="Código Aqui!" name="descuento" >
                <input type="submit" value="Ok">
            </form>
            <div id="total">
                <h4 id="precioTotal">Total Compra:
                    <?php 
                        if($_SESSION['precio'] > 0){
                            echo $_SESSION['precio'], "€";
                        }                    
                    ?>
                </h4>
            </div>
        </div>
        <br><br>
        <div id="lateral"> 
            <table>
                <tr>
                    <td colspan="3">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <form id="eliminaAcer" class="eliminar" action="index.php" method="get">
                            <input type="hidden" name="codigoEliminado" value="acer">
                            <input type="submit" value="X">
                        </form>                            
                    </td>
                    <td><img src="img/acer.jpeg" id="carrito"></td>
                    <td><h4 id="cantidadAcer"><?php echo $_SESSION['carrito']['acer']; ?></h4></td>
                </tr>
                <tr>
                    <td>
                        <form id="eliminaAsus" class="eliminar" action="index.php" method="get">
                            <input type="hidden" name="codigoEliminado" value="asus">
                            <input type="submit" value="X">
                        </form>                            
                    </td>
                    <td><img src="img/asus.jpeg" class="item"></td>
                    <td><h4 id="cantidadAsus"><?php echo $_SESSION['carrito']['asus']; ?></h4></td>
                </tr>
                <tr>
                    <td>
                        <form id="eliminaHp" class="eliminar" action="index.php" method="get">
                            <input type="hidden" name="codigoEliminado" value="hp">
                            <input type="submit" value="X">
                        </form>                            
                    </td>
                    <td><img src="img/hp.jpeg" class="item"></td>
                    <td><h4 id="cantidadHp"><?php echo $_SESSION['carrito']['hp']; ?></h4></td>
                </tr>
                <tr>
                    <td>
                        <form id="eliminaMsi" class="eliminar" action="index.php" method="get">
                            <input type="hidden" name="codigoEliminado" value="msi">
                            <input type="submit" value="X">
                        </form>            
                    </td>
                    <td><img src="img/msi.jpeg" class="item"></td>
                    <td><h4 id="cantidadMsi"><?php echo $_SESSION['carrito']['msi']; ?></h4></td>
                </tr>
                <tr>
                    <td>        
                        <form id="eliminaSamsung" class="eliminar" action="index.php" method="get">
                            <input type="hidden" name="codigoEliminado" value="samsung">
                            <input type="submit" value="X">
                        </form>
                    </td>
                    <td><img src="img/samsung.jpeg" class="item"></td>
                    <td><h4 id="cantidadSamsung"><?php echo $_SESSION['carrito']['samsung']; ?></h4></td>
                </tr>
            </table>   
            <br>
        </div>
            <div id="contenedor">
                <?php
                    foreach($_SESSION['productos'] as $key => $value) {
                        echo "<form class=\"producto\" id=\"", $key, "\" action=\"index.php\" method=\"get\">";
                        echo "<a class=\"detalle\" href=\"detalle.php?codigo=",$key ,"\">";                    
                        echo "<img src=\"", $value['img'], "\" title=\"Detalle\">";
                        echo "</a>";
                        echo "<p>", $value['nombre'], "</p>";
                        echo "<h4>", $value['precio'], " Euros</h4>";
                        echo "<input type=\"hidden\" name=\"codigoProd\" value=\"", $key, "\">";
                        echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
                        echo "<input type=\"submit\" value=\"Comprar\">";
                        echo "</form>";
                    }
                ?>            
            </div>
    </body>
</html>