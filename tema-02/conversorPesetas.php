<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá
introducir por teclado.
-->
<html>
    <head>
        <title>Conversor Pesetas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Conversor Pesetas</h3>
        <?php
            $pesetas = $_GET["pesetas"];
            $conversor = $pesetas / 166;
            
            echo '<p> Las ', $pesetas, ' pesetas son ', round($conversor, 2), ' euros</p>';
        ?>
        </div>
    </body>
</html>
