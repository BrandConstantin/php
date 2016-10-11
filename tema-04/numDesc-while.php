<!DOCTYPE html>
<!--
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Números descendientes con while</title>
    </head>
    <body>
        <?php
            $num = 320;
            
            while ($num > 160){
                $num -= 20;
                echo $num, "  ";
            }
        ?>
    </body>
</html>
