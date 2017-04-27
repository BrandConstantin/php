<!DOCTYPE html>
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
            
            $numMin = 99;
            $filaMin;
            $columnaMin;
            
            //rellenar matriz
            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    echo $arrayNum[$i][$j] = rand(10, 99)." ";
                }
                echo "<br>";
            }
            
            //buscar el máximo en el array
            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    if($arrayNum[$i][$j] < $numMin){
                        $numMin = $arrayNum[$i][$j];
                        $filaMin = $i;
                        $columnaMin = $j;
                    }
                }
            }
            echo '<br>';
            
            echo 'Número mínimo: '.$numMin."<br>";
            echo "Fila del mínimo: ".$filaMin."<br>";
            echo "Columna del mínimo: ".$columnaMin."<br>";
            
            //pinto los números cercanos
            echo "<br>";
            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    if((abs($i - $filaMin) <= 1) && (abs($j - $columnaMin) <= 1)){
                        echo "<p style='color:blue;'>".$arrayNum[$i][$j]."<p style='color:blue;'>";
                    }else{
                        echo "<p style='color:black;'>".$arrayNum[$i][$j]."<p style='color:black;'>";
                    }
                }
                echo "<br>";
            }
        ?>
    </body>
</html>