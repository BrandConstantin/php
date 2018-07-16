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
        <title>MediaMarket Place Detallada</title>
        <link rel="stylesheet" type="text/css" href="estilos2.css"
    </head>
    <body>
        <h3>MediaMarket Place Detallada</h3>
        <table style="border: 2px; margin: 0px 30px 0px 30px;">
            <tr><td>
            <h5>Portatiles Destacados</h5>
            <?php
                $producto = array(
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
                
                $_SESSION['producto'] = $producto;
                
                foreach ($producto as $codigo => $elemento){
            ?>
                    <img src="<?= $elemento['img'] ?>" width="400px" border="1px solid"><br>
                    <?= $elemento["nombre"] ?><br>
                    Precio: <?= $elemento["precio"] ?>€<br>
                    <form action="respuestas.php" method="post">
                        <input type="hidden" name="ejercicio" value="06_detallada">
                        <input type="hidden" name="codigo" value="<?= $codigo ?>">
                        <input type="hidden" name="accion" value="detalle">
                        <input type="submit" value="Detalle">
                    </form>
                    <form action="respuestas.php" method="post">
                        <input type="hidden" name="ejercicio" value="06">
                        <input type="hidden" name="codigo" value="<?= $codigo ?>">
                        <input type="hidden" name="accion" value="comprar">
                        <input type="submit" value="Comprar">
                    </form>
                    <br><br><br>
                    <hr>
            <?php
                }
            ?>
            </td><td>
            <h3>Carrito Compras</h3>
            <hr>
            <?php
                $accion = $_POST['accion'];
                $codigo = $_POST['codigo'];
                
                //inicializa el carrito
                if(!isset($_SESSION['carrito'])){
                    $_SESSION['carrito'] = array('acer' => 0, 'asus' => 0, 'hp' => 0,
                        'msi' => 0, 'samsung' => 0);
                }
                
                if($accion == 'comprar'){
                    $_SESSION['carrito'][$codigo]++;
                }
                
                if($accion == "eliminar"){
                    $_SESSION['carrito'][$codigo] = 0;
                }
                
                //mostrar el carrito
                $totalCompra = 0;
                
                foreach ($producto as $cod => $elemento){
                    if($_SESSION['carrito'][$cod] > 0){
                        $totalCompra = $totalCompra + ($_SESSION["carrito"][$cod] * $elemento['precio']);
            ?>
                        <img src="<?= $elemento['img'] ?>" width="400" border="1px solid"><br>
                        <?= $elemento["nombre"] ?><br>
                        Precio: <?= $elemento["precio"] ?>€<br>
                        Unidades: <?= $_SESSION["carrito"][$cod] ?><br>
                        <form action="respuestas.php" method="post">
                            <input type="hidden" name="ejercicio" value="06">
                            <input type="hidden" name="codigo" value="<?= $cod ?>">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="submit" value="Eliminar">
                        </form>
                    <br><br><br>
                    <hr>
            <?php
                    }
                }
            ?>
            <b>Total: <?= $totalCompra ?> €</b>
            </td></tr>
        </table>
    </body>
</html>
