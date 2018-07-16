<!DOCTYPE html>
<!--
Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
se indican del 1 al 8.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teblero Ajedrez</title>
        <style type="text/css">
            table, tr, td{
                text-align: center;
                border: 1px solid blueviolet;
            }
            
            .negro{
                background-color: #000;
            }
            
            .blanco{
                background-color: #fff;
            }
            
            .violeta{
                background-color: violet;
            }
        </style>
    </head>
    <body>
    <?php
        //recoger posició del alfil
        $posicion = $_GET['posicion'];
        $x = ord(substr($posicion, 0, 1)) - ord('a');
        $y = 8 - substr($posicion, 1, 1);
        
        //pinta el tablero de ajedrez
        $color = 'blanco';
        
        echo '<table>';
        echo '<tr class="violeta">';
        echo '<td></td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td>'
                . '<td>F</td><td>G</td><td>H</td><td></td></tr>';

        for($fila = 0; $fila < 8; $fila++){
            echo "<tr>";
            echo "<td class=\"violeta\" style=\"text-align: right;\">".(8-$fila)."</td>";
            
            for($columna = 0; $columna < 8; $columna++){
                echo "<td class=\"$color\">";
                
                //comprueba si el alfil está en la posición actual
                if(($x == $columna) && ($y == $fila)){
                    echo '<img src="img/alfil.png">';
                }else if(abs(abs($x) - abs($columna)) == abs(abs($y) - abs($fila))){
                    //comprueba si es una posición donde puede llegar el alfil
                    echo '<img src="img/alfilsemitransparente.png">';
                }else{
                    echo '<img src="img/vacio.png">';
                }
                
                echo '</td>';

                if($color == "blanco"){
                    $color = "negro";
                }else{
                    $color = "blanco";
                }
                
                echo "</td>";
            }
            
            if($color == "blanco"){
                $color = "negro";
            }else{
                $color = "blanco";
            }
        
            echo '<td class="violeta" style="text-align: left;"'.(8 - $fila).'</td></tr>';
        }
    ?>
                <tr class="violeta">
                    <td></td><td>A</td><td>B</td><td>C</td><td>D</td>
                    <td>E</td><td>F</td><td>G</td><td>H</td><td></td>
                </tr>
            </table>
    </body><br>
    Introduzca las coordenadas del alfil:
    <br>
    <form action="tableroAjedrez.php" method="get">
      <input type="hidden" name="ejercicio" value="14">
      <input type="text" name="posicion" autofocus="" required=""><br>
      <input type="submit" value="Aceptar">
    </form>
</html>