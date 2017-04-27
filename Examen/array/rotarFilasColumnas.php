<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            
            $auxiliar = array();
            $a = 0;
            
            //llenamos un array con 64 números, 8 columnas por 8 filas
            do{
                $numero = rand(10, 99);
                
                if (!in_array($numero, $auxiliar)){
                    $auxiliar [] = $numero; 
                    $a++;
                }
            }while($a < 90);
            
            //pasar el array unidimensional a uno bidimensional
            $i = 0;
            
            for ($x = 0; $x < 9; $x++){
                for ($y = 0; $y < 9; $y++){
                    $arrayFinal[$x][$y] = $auxiliar[$i];
                    $i++;
                    
                    //mostramos el array
                    echo $arrayFinal[$x][$y]." <tab>";
                }                
                echo "<tab><br>";
            }
           
            echo "<br>";
            
            //escogemos las filas y las columnas
            $fila = 3;
            $columna = 7;
            $x = 0;
            $y = 0;
            
            //con la fila y columna escogidas las metmos en un array
            while ($x < 9){
                if ($x == $fila){
                    while ($y < 9){
                        $auxiliar2 [$y] = $arrayFinal[$x][$y];
                        $y++;
                    }
                }
                $x++;
                $y = 0;
            }

            while ($y < 9){
                if ($y == $columna){
                    while ($x < 9){
                        $auxiliar3 [$x] = $arrayFinal[$x][$y];
                        $x++;
                    }
                }
                $y++;
                $x = 0;
            }
            
            //mostramos fila y columna escogida
            echo "Fila escogida: ";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            foreach ($auxiliar2 as $value2) {
                echo $value2 . " ";
            }
            echo "<br>";
            echo "Columna escogida: ";
            echo "&nbsp;&nbsp;";
            foreach ($auxiliar3 as $value3) {
                echo $value3 . " ";
            }

            //introducir los valores en la fila y columna elegida                         
            while ($x < 9){
                if ($x == $fila){
                    while ($y < 9){
                        $arrayFinal[$x][$y] = $auxiliar3[$y];
                        $y++;
                    }
                }
                $x++;
                $y = 0;
            }
            
            while ($y < 9){
                if ($y == $columna){
                    while ($x < 9){
                        $arrayFinal[$x][$y] = $auxiliar2 [$x];
                        $x++;
                    }
                }
                $y++;
                $x = 0;
            }
            
            echo "<br><br>";
            //Muestro el array resultante
            for ($x = 0; $x < 9; $x++){
                for ($y = 0; $y < 9; $y++){
                    echo $arrayFinal[$x][$y]." ";
                }                
                echo "<tab><br>";
            }
        ?>
    </body>
</html>