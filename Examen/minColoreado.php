<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <div id="contenedor">
      <!--
        Crea un array bidimensional de 6 filas por 8 columnas relleno con 
        números aleatorios entre 1 y 500 (ambos incluidos). Los números se 
        pueden repetir. Se deben mostrar todos los números bien alineados en 
        filas y columnas. Muestra el mínimo de entre los primos en rojo y los 
        números adyacentes en amarillo. Si el mínimo primo se repite, se puede 
        colorear uno cualquiera de ellos o todos, como al alumno le resulte más 
        fácil.
      -->      
      <?php
        error_reporting(E_ALL ^ E_NOTICE);
        
        $numFilas = 6;
        $numColumnas = 8;
        $array;
        $arrayAux;
        $min = PHP_INT_MAX;
        $k = 0;
        
        // rellena $arrayAux
        do {
            $arrayAux[] = rand(1, 500);
            $k++;
        } while ($k < ($numFilas * $numColumnas));
        
        $k = 0;
        
        // rellena array $array con los valores de $arrayAux
        for ($i = 0; $i < $numFilas; $i++) {
          for ($j = 0; $j < $numColumnas; $j++) {
            $array[$i][$j] = $arrayAux[$k];
            $k++;
            // recoge $min
            if ($array[$i][$j] < $min) {
              $min = $array[$i][$j];
            }
          }
        }
        
        // muestra array $array
        echo "<table class='colapsada'>";
        for ($i = 0; $i < $numFilas; $i++) {
          echo "<tr>";
          for ($j = 0; $j < $numColumnas; $j++) {
            echo "<td>";
            if ($array[$i][$j] == $min) {
              echo "<span style='color:red;'><strong>". $array[$i][$j] ."</strong></span> ";
            } else if (($array[$i - 1][$j - 1] == $min) 
              || $array[$i + 1][$j + 1] == $min
              || $array[$i - 1][$j + 1] == $min
              || $array[$i + 1][$j - 1] == $min
              || $array[$i + 1][$j] == $min
              || $array[$i - 1][$j] == $min
              || $array[$i][$j + 1] == $min
              || $array[$i][$j - 1] == $min) {
              echo "<span style='color:green;'><strong>". $array[$i][$j] ."</strong></span> ";
            } else {
              echo $array[$i][$j]." ";
            }
            echo "</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
  </body>
</html>
