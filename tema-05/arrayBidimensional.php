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
            $num = rand(100, 999);
            if(!in_array($num, $linea)){
                $linea[] = $num;
                $i++;
            }
        }while($i < 54);

        //una vez que se han generado los 54 númros se vuelcan
        //en un array de 9x6
        $min = 999;
        $i = 0;

        for($x = 0; $x < 9; $x++){
            for($y = 0; $y < 6; $y++){
                $numeros[$x][$y] = $linea[$i];
                $i++;

                if($numeros[$x][$y] < $min){
                    $min = $numeros[$x][$y];
                    $minX = $x;
                    $minY = $y;
                }
            }
        }

        //mostrar array con el minimo en azul y las diagonales en verde
        // el abs(x) devuelve valor absoluto
        echo "<table>";
        
        for($x = 0; $x < 9; $x++){
            echo "<tr>";
            
            for($y = 0; $y < 6; $y++){
                if($numeros[$x][$y] == $min){
                   echo '<td><span style="color: blue; font-weight:bold">'.$numeros[$x][$y].' </span>'; 
                }else if (abs(abs($x) - abs($minX)) == abs(abs($y) - abs($minY))){ 
                    echo '<span style="color: green; font-weight:bold">'.$numero[$x][$y].' </span></td>';echo '<td><span style="color: green; font-weight:bold">'.$numeros[$x][$y].' </span>';
                }else{
                    echo '<td>'.$numeros[$x][$y].'</td>';
                }
            }
            echo'</tr>';
        }
        echo '</table>';
    ?>
    </body>
</html>