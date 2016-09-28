<!DOCTYPE html>
<!--
Escribe un programa que calcule el área de un rectángulo.
-->
<html>
    <head>
        <title>Area Rectangulo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Area Rectangulo</h3>
            <?php 
                $altura = $_GET["altura"];
                $base = $_GET["base"];
                $area = $altura * $base;
                
                echo 'Resultado ', $area, ' metros cuadrados';
            ?>
        </div>
    </body>
</html>
