<!DOCTYPE html>
<!--
Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pares primera posición</title>
    </head>
    <body>     
        <?php
            //generar los números
            for ($i = 0; $i < 20; $i++) {
                $numero[$i] = rand(0, 100);
            }

            // Muestra el array original
            echo "Array original:<br>";
            echo "<table><tr>";

            for ($i = 0; $i < 20; $i++) {
                echo "<td>$i</td>";
            }

            echo "</tr><tr>";

            for ($i = 0; $i < 20; $i++) {
                echo "<td>".$numero[$i]."</td>";
            }

            echo "</tr></table>";
           
            //contar los pares e impares
            $cuentaPares = 0;
            $cuentaImpares = 0;
            
            for($i = 0; $i < 20; $i++) {
                if ($numero[$i] % 2 == 0) {
                    $pares[$cuentaPares] = $numero[$i];
                    $cuentaPares++;
                } else {
                    $impares[$cuentaImpares] = $numero[$i];
                    $cuentaImpares++;
                }
            }
            
            //modificar el array poniendo los pares por delante
            for($i = 0; $i < $cuentaPares; $i++){
                $numero[$i] = $pares[$i];
            }
            
            for($i = $cuentaPares; $i < $cuentaPares + $cuentaImpares; $i++){
                $numero[$i] = $impares[$i - $cuentaPares];
            }
            
            // Muestra el array con pares e impares
            echo "<br>Array con pares por delante:<br>";
            echo "<table><tr>";

            for ($i = 0; $i < 20; $i++) {
                echo "<td>$i</td>";
            }

            echo "</tr><tr>";

            for ($i = 0; $i < 20; $i++) {
                if($numero[$i] == $pares[$i]){
                    echo "<td><span style=\"color: green;\">$numero[$i]&nbsp;&nbsp;</span></td>";
                }else{
                    echo "<td><span style=\"color: red;\">$numero[$i]&nbsp;&nbsp;</span></td>";
                }
            }

            echo "</tr></table>";
        ?>
    </body>
</html>