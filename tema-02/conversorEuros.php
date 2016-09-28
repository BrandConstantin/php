<!DOCTYPE html>
<!--
Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se
deberá introducir por teclado.
-->
<html>
    <head>
        <title>Conversor Euros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Conversor Euros</h3>
            <?php
                $pesetas = 166;
                $euros = $_GET["euros"];
                $conversor = $euros * $pesetas;

                echo '<p> Los ', $euros, ' euros son ', round($conversor, 2), ' pesetas</p>';
            ?>
        </div>
    </body>
</html>
