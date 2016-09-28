<!DOCTYPE html>
<!--
Escribe un programa que calcule el volumen de un cono mediante la fórmula
V = 13 πr 2 h.
-->
<html>
    <head>
        <title>Volumen Conol</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Volumen Cono</h3>
            <hr style="border-style: solid #f34 1px">
            <?php 
                $h = $_GET["h"];
                $r = $_GET["r"];
                $pi = 3.14;
                
                $volumen = (($pi * ($r * $r)) * $h) / 3;
                
                echo "El volumen del cono es de ", round($volumen, 2), " metros cubicos";
            ?>
        </div>
    </body>
</html>
