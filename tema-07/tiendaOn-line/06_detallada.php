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
        <h4>Detalles Producto:</h4>
        <?php
            $codigo = $_POST['codigo'];
            $producto = $_SESSION['producto'];
            $elemento = $producto[$codigo];
        ?>
            <img src="<?= $elemento['img'] ?>" width="400px" border="1px solid"><br>
            <?= $elemento["nombre"] ?><br>
            Precio: <?= $elemento["precio"] ?>€<br>
            Unidades Compradas: <?= $_SESSION['carrito'][$codigo] ?><br>
            Detalles: <?= $elemento['detalle'] ?>
            <form action="respuestas.php" method="post">
                <input type="hidden" name="ejercicio" value="06">
                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                <input type="hidden" name="accion" value="comprar">
                <input type="submit" value="Comprar">
            </form>
            <form action="respuestas.php" method="post">
                <input type="hidden" name="ejercicio" value="06">
                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                <input type="submit" value="Inicio">
            </form>
            <br><br><br>
            <hr>
    </body>
</html>