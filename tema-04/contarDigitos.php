<!DOCTYPE html>
<!--
Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.
-->
<html>
    <head>
        <title>Contar Digitos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Contando digitos...</h1>
        <hr style="border-style: dotted 1px #f34">
        <div>
            <?php
                $num = $_POST["num"];
                $contador = 0;
                
                while($num > 0){
                    $num = intval($num / 10);
                    $contador++;
                }
                
                echo 'El número tiene ', $contador, ' digitos';
            ?>
        </div>
    </body>
</html>
