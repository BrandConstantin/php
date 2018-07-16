<!DOCTYPE html>
<!--
Realiza un programa que, a partir de un array de 4 filas por 7 columnas con números generados al
azar entre 10 y 99, muestre a la derecha de cada fila el mínimo encontrado en esa fila y que muestre
debajo de cada columna el valor máximo encontrado en esa columna. El mínimo de cada fila se debe
pintar en azul y el máximo de cada columna en rojo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            p{
                display: inline;
            }
        </style>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            
            $min = 99;
            $max = 10;
            $fila;
            $filaMin;
            
            //rellenar matriz
            echo "Array original<br>";
            echo '................................<br>';
            for ($i = 1; $i <= 4; $i++) {
                for ($j = 1; $j <= 7; $j++) {
                    echo $arrayNum[$i][$j] = rand(10, 99)." ";
                }
                echo "<br>";
            }
            
            echo "<br><br><br>";
            
            //buscar min y max sacado
            for ($i = 1; $i <= 4; $i++) {
                for ($j = 1; $j <= 7; $j++) {
                    if($arrayNum[$i][$j] < $min){
                        $min = $arrayNum[$i][$j];
                    }else if($arrayNum[$i][$j] > $max){
                        $max = $arrayNum[$i][$j];
                    }else{
                        $arrayNum[$i][$j];
                    }
                }
            }
            
            //mostrar min y el max
            echo "Array con Min y Max<br>";
            echo '................................<br>';
            for ($i = 1; $i <= 4; $i++) {                
                for ($j = 1; $j <= 7; $j++) {
                    if($arrayNum[$i][$j] ==$min){
                        echo "<p style='color:blue;'>".$arrayNum[$i][$j]."</p>";
                    }else if($arrayNum[$i][$j] == $max){
                        echo "<p style='color:red;'>".$arrayNum[$i][$j]."</p>";
                    }else{
                        echo $arrayNum[$i][$j];
                    }               
                }
                 echo "<br>";
            }
        ?>
    </body>
</html>