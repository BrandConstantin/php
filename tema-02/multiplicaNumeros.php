<!DOCTYPE html>
<!--
Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
-->
<html>
    <head>
        <title>Multiplicar 2 números</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Multiplicar dos números</h3>
            <?php
                $a = $_GET["a"];
                $b = $_GET["b"];

                echo "La multiplicación de $a más $b es de ", $a * $b;
            ?>
        </div>
    </body>
</html>
