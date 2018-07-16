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
            
            //primero creamos el array 
            for ($i = 0; $i < 4; $i++) {
                for ($x = 0; $x < 7; $x++) {
                    $array[$i][$x] = rand(10, 99);
                }
            }
            
            //buscamos los mínimos de cada fila
            for ($i = 0; $i < 4; $i++){
                $min = 100;
                for ($x = 0; $x < 7; $x++) {
                    if ($array[$i][$x] < $min) {
                        $arrayMin[$i] = $array[$i][$x];
                        $min = $array[$i][$x];
                    } 
                }
            }
            
            //buscamos los máximos de cada columna
            for ($i = 0; $i < 7; $i++){
                $max = -1;
                for ($x = 0; $x < 4; $x++) {
                    if ($array[$x][$i] > $max) {
                        $arrayMax[$i] = $array[$x][$i];
                        $max = $array[$x][$i];
                    } 
                }
            }
            //pintamos todo y ponemos los colores
            for ($i = 0; $i < 4; $i++){
                for ($x = 0; $x < 7; $x++) {
                    if ($array[$i][$x] == $arrayMin[$i]) {
                        echo "<span style =\"color: blue\">".$array[$i][$x]." </span>";
                    } else if ($array[$i][$x] == $arrayMax[$x]) {
                        echo "<span style =\"color: red\">".$array[$i][$x]." </span>";
                    } else {
                        echo $array[$i][$x]." ";
                    }
                }
                //mostramos el mínimo a la derecha
                echo "| $arrayMin[$i]<br>";
            }
            //y ponemos los máximos
            echo "----------------------------------<br>";
            for ($i = 0; $i < 7; $i++) {
                echo $arrayMax[$i] ." ";
            }
        ?>
    </body>
</html>