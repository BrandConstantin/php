<!DOCTYPE html>
<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Multiplos de 5 con bucle while</title>
    </head>
    <body>
        <?php
            $num = 0;
            
            while($num <= 100){
                if(($num % 5) == 0){
                    echo $num, "  ";
                }
                $num++;
            }
        ?>
    </body>
</html>
