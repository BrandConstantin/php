<!DOCTYPE html>
<!--
Realiza un programa que sea $capaz de rotar todos los elementos de una matriz cuadrada una posición
en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
resultado, ambas con los números convenientemente alineados.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Matriz Cuadrada</title>
    </head>
    <body>
    <?php
    //generar el array con números que no se repiten
    $i = 0;
    do{
        $num = rand(0, 100);
        if(!in_array($num, linea)){
            $linea[] = $num;
            $i++;
        }
    }while($i < 144);
    
    //una vez que se han generado los 144 número se vuelcan en un array de 12x12
    $min = 100;
    $max = 0;
    $i = 0;
    
    for($x = 0; $x < 12; $x++){
        for($y = 0; $y < 12; $y++){
            $numeros[$x][$y] = $linea[$i];
            $i++;
            
            if($numeros[$x][$y] < $min){
                $min = $numeros[$x][$y];
            }
            
            if($numeros[$x][$y] > $max){
                $max = $numeros[$x][$y];
            }
        }
    }
    
    //mostrar el array 
    echo '<table>';
    
    for($x = 0; $x < 12; $x++){
        echo '<tr>';
        
        for($y = 0; $y < 12; $y++){
            if($numeros[$x][$y] == $min){
                echo '<td><span style="color: blue; font-weight:bold">'.$numeros[$x][$y].' </span>'; 
            }else if($numeros[$x][$y] == $max){
                echo '<td><span style="color: red; font-weight:bold">'.$numeros[$x][$y].' </span>'; 
            }else{
                echo '<td>'.$numeros[$x][$y].'</td>';
            }
        }
        echo '</tr>';
    }
    
    echo '</table>';
    
    echo '-------------------------------------------------------------------';
    
    //rotar array
    for($capa = 0; $capa < 6; $capa++){
       //rotar por arriba
        $aux1 = $numeros[$capa][11 - $capa];
        
        for($x = 11 - $capa; $x > $capa; $x--){
            $numeros[$capa][$x] = $numeros[$capa][$x - 1];
        }
        
        //rotar por la derecha
        $aux2 = $numeros[11 - $capa][11 - $capa];
        
        for($x = 11 - $capa; $x > $capa + 1; $x--){
            $numeros[$x][11 - $capa] = $numeros[$x - 1][11 - $capa];
        }
        
        $numeros[$capa + 1][11 - $capa] = $aux1;
        
        //rotar por abajo
        $aux1 = $numeros[11 - $capa][$capa];
        
        for($x = $capa; $x < 11 - $capa - 1; $x++){
            $numeros[11 - $capa][$x] = $numeros[11 - $capa][$x + 1];
        }
        
        $numeros[11 - $capa][11 - $capa - 1] = $aux2;
        
        //rotar por la izquierda
        for($x = $capa; $x < 11 - $capa - 1; $x++){
            $numeros[$x][$capa] = $numeros[$x + 1][$capa];
        }
        
        $numeros[11 - $capa - 1][$capa] = $aux1;
    }
    
    //mostrar el array 
    echo '<table>';
    
    for($x = 0; $x < 12; $x++){
        echo '<tr>';
        
        for($y = 0; $y < 12; $y++){
            if($numeros[$x][$y] == $min){
                echo '<td><span style="color: blue; font-weight:bold">'.$numeros[$x][$y].' </span>'; 
            }else if($numeros[$x][$y] == $max){
                echo '<td><span style="color: red; font-weight:bold">'.$numeros[$x][$y].' </span>'; 
            }else{
                echo '<td>'.$numeros[$x][$y].'</td>';
            }
        }
        echo '</tr>';
    }
    
    echo '</table>';
    ?>
    </body>
</html>