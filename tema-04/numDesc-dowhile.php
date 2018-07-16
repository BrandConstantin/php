<!DOCTYPE html>
<!--
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do while .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Números descendientes con do while</title>
    </head>
    <body>
        <?php
            $num = 320;
            
            do{
                $num -= 20;
                echo $num, "  ";
            }while($num > 160);
        ?>
    </body>
</html>
