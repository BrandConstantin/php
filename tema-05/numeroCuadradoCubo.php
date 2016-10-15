<!DOCTYPE html>
<!--
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>3 array con números, cuadrados y cubos</title>
    </head>
    <body>
        <?php
            for($i = 0; $i < 20; $i++){
                $numeros[] = rand(0, 100);
            }
            
            foreach($numeros as $valor){
                $cuadrado[] = $valor * $valor;
                $cubo[] = $valor * $valor * $valor;
            }
            
        ?>
            <table>
                <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
        <?php
            for($i = 0; $i < 20; $i++){
                echo "<tr><td>".$numeros[$i]."</td><td>".$cuadrado[$i]."</td>"
                        . "<td>".$cubo[$i]."</td></tr>";
            }
        ?>
    </body>
</html>
