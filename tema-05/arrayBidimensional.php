<!DOCTYPE html>
<!--
Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendi-
dos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
cumplan los siguientes requisitos:
• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
• El mínimo debe aparecer en color azul.
• El resto de números debe aparecer en color negro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array Bidimensional</title>
    </head>
    <body>
    <?php
        //generar array con números que no se repiten
    $i = 0;
    do{
        $numeros = rand(100, 999);
        if(!in_array($numeros, $linea)){
            $linea[] = $numeros;
            $i++;
        }
    }while($i < 54);
    
    //una vez que se han generado los 54 númros se vuelcan
    //en un array de 9x6
    $min = 999;
    
    for($x = 0; $x < 9; $x++){
        for($y = 0; $y < 6; $y++){
            $num[$x][$y] = $linea[$i];
        }
    }
    ?>
    </body>
</html>