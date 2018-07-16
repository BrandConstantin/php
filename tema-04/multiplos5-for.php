<!DOCTYPE html>
<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Multiplos de 5 con bucle for</title>
    </head>
    <body>
        <?php
            $num;
            
            for($num = 0; $num <= 100; $num++){
                if(($num % 5) == 0){
                    echo $num, "  ";
                }
            }
        ?>
    </body>
</html>
