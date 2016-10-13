<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.
-->
<html>
    <head>
        <title>Media Números Positivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Media números positivos</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num = $_POST["num"];
            $suma = $_POST["suma"];
            $elementos = $_POST["elementos"];
            
            if ($num >= 1){
                $suma += $num;
                $elementos++;
        ?>
        
            <div>
                <form action="mediaNumPositivos.php" method="post">
                    <p>Introduce otro número positivo:</p>
                    <input type="number" name="num"  autofocus>
                    <input type="hidden" name="elementos"  value="<?php echo $elementos; ?>">
                    <input type="hidden" name="suma"  value="<?php echo $suma; ?>">
                    <input type="submit" value="Enviar">
                </form>
            </div>
            
        <?php
            }else{
                echo 'La media de los números es ', $media = $suma / $elementos;
            }
        ?>
    </body>
</html>
