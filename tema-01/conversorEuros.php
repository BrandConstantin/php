<!DOCTYPE html>
<!--
Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere 
 convertir deberá estar almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $pesetas = 166;
            $euros = 35000;
            $conversor = $euros * $pesetas;
            
            echo '<p> Los 35 000 euros son ', round($conversor, 2), ' pesetas</p>';
        ?>
    </body>
</html>
