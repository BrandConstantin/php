<!DOCTYPE html>
<!--
Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media.
-->
<html>
    <head>
        <title>Números hasta 10 mil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Números hasta 10 mil</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
            $totalAcumulado = $_POST['totalAcumulado'];
            $contadorNumeros = $_POST['contadorNumeros'];
            
            //se inicializan
            if(!isset($num)){
                $sumaNumeros = 0;
                $contadorNumeros = -1;
            }
            
            if(($totalAcumulado < 10000) || (!isset($num))){
                $totalAcumulado += $num;
                $contadorNumeros++;
            }
            
            if((!isset($num)) || ($totalAcumulado < 10000)){
        ?>
        <form action="numHasta10Mil.php" method="post">
            <p>Introduce número:</p>
            <input type="number" name="num" autofocus ><br>
            <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>"><br>
            <input type="hidden" name="totalAcumulado" value="<?php echo $totalAcumulado; ?>"><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            }
            
                        
            if($totalAcumulado >= 10000){
                echo "Se han introducido un total de ", $contadorNumeros, " números <br>";
                echo "La media de los números es ".($totalAcumulado / $contadorNumeros)."<br>";
                echo "El total acumulado es $totalAcumulado";
            }
        ?>
        </div>   
    </body>
</html>