<!DOCTYPE html>
<!--
Escribe un programa que calcule el total de una factura a partir de la base imponible.
-->
<html>
    <head>
        <title>Factura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Factura</h3>
            <hr style="border-style: solid #f34 1px">
            <?php 
                $precio = $_GET["precio"];
                $descuento = $_GET["descuento"];
                
                $precioConIva = ($precio * 0.21) + $precio;
                $precioConDescuento = ($precioConIva * $descuento) / 100;
                $total = $precioConIva - $precioConDescuento;
            ?>
            <table>
                <thead><th>FACTURA</th></thead>
                <tfoot><td>TOTAL: <?php echo $total, '<br>' ?></td></tfoot>
                <tbody>
                    <tr><td>BASE IMPONIBLE: <?php echo $precio, '<br>' ?></td></tr>
                    <tr><td>IVA: 21% </td></tr>
                    <tr><td>PRECIO + IVA: <?php echo $precioConIva, '<br>' ?></td></tr>
                    <tr><td>DESCUENTO: <?php echo $precioConDescuento, '<br>' ?></td></tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
