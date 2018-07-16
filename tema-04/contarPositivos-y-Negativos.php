<!DOCTYPE html>
<!--
Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
son negativos.
-->
<html>
    <head>
        <title>Contar Positivos Y Negativos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Contar Positivos y Negativos</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $contador = $_POST["contador"];
            $positivos = $_POST["positivos"];
            $num = $_POST["num"];
            
            if($num > 0){
                $positivos++;
            }
            
            if(!isset ($num)){
                $contador = 1;
                $positivos = 0;
            }else{
                $contador++;
            }
            
            if($contador < 11){
        ?>    
        <div>
            <form action="contarPositivos-y-Negativos.php" method="post">
                <p>Introduce un número:</p>
                <input type="number" name="num"  autofocus>
                <input type="hidden" name="contador" value="<?php echo $contador; ?>">
                <input type="hidden" name="positivos" value="<?php echo $positivos; ?>">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
            }
            
            if($contador == 11){
                echo 'Se han introducido un total de: ';
                echo $positivos, ' positivos y ';
                echo (10 - $positivos), ' negativos';
            }
        ?>
    </body>
</html>
