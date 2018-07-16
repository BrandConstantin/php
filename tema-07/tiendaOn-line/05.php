<!DOCTYPE html>
<!--
Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. Un
catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer al menos
la descripción y el precio. Todos los productos deben tener una imagen que los identifique. Al lado
de cada producto del catálogo deberá aparecer un botón Comprar que permita añadirlo al carrito.
Si el usuario hace clic en el botón Comprar de un producto que ya estaba en el carrito, se deberá
incrementar el número de unidades de dicho producto. Para cada producto que aparece en el carrito,
habrá un botón Eliminar por si el usuario se arrepiente y quiere quitar un producto concreto del
carrito de la compra. A continuación se muestra una captura de pantalla de una posible solución.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MediaMarket Place</title>
        <link rel="stylesheet" type="text/css" href="estilos.css"
    </head>
    <body>
        <h3>MediaMarket Place</h3>
        <table style="border: 2px; margin: 0px 30px 0px 30px;">
            <tr><td>
            <h4>Portatiles Destacados</h4>
            <?php
                $producto = array(
                  $acer = array('nombre' => 'Acer', 'precio' => 670, 'img' => 'img/acer.jpeg'),
                  $asus = array('nombre' => 'Asus', 'precio' => 770, 'img' => 'img/asus.jpeg'),
                  $hp = array('nombre' => 'Hp', 'precio' => 795, 'img' => 'img/hp.jpeg'),
                  $msi = array('nombre' => 'Msi', 'precio' => 1170, 'img' => 'img/msi.jpeg'),
                  $samsung = array('nombre' => 'Samsung', 'precio' => 980, 'img' => 'img/samsung.jpeg'),
                );

                foreach ($producto as $codigo => $elemento){
            ?>
                    <img src="<?= $elemento['img'] ?>" width="400px" border="1px solid"><br>
                    <?= $elemento["nombre"] ?><br>
                    Precio: <?= $elemento["precio"] ?>€<br>
                    <form action="respuestas.php" method="post">
                        <input type="hidden" name="ejercicio" value="05">
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
            <h3>Carrito Compra</h3>
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
                            <input type="hidden" name="ejercicio" value="05">
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
