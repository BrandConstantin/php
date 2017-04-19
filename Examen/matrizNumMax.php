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
            
            $numMax = 10;
            $filaMax;
            $columnaMax;
            
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
                    if($arrayNum[$i][$j] > $numMax){
                        $numMax = $arrayNum[$i][$j];
                        $filaMax = $i;
                        $columnaMax = $j;
                    }
                }
            }
            echo '<br>';
            
            echo 'Número máximo: '.$numMax."<br>";
            echo "Fila del máximo: ".$filaMax."<br>";
            echo "Columna del máximo: ".$columnaMax."<br>";
            
            //pinto los números cercanos
            echo "<br>";
            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    if((abs($i - $filaMax) <= 1) && (abs($j - $columnaMax) <= 1)){
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