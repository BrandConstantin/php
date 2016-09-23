<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere
convertir deberá estar almacenada en una variable
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $pesetas = 34566788;
            $unEuros = 166;
            $conversor = $pesetas / $unEuros;
            
            echo '<p> Los 34566788 pesetas son ', round($conversor, 2), ' euros</p>';
        ?>
    </body>
</html>
