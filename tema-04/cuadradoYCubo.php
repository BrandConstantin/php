<!DOCTYPE html>
<!--
Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números
enteros a partir de uno que se introduce por teclado.
-->
<html>
    <head>
        <title>Cuadrado y Cubo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Cuadrado y Cubo</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num = $_POST["num"];
            
            if (!isset($num)){              
        ?>
        <div>
            <form action="cuadradoYCubo.php" method="post">
                <p>Introduce un número positivo:</p>
                <input type="number" name="num"  autofocus>
                <input type="submit" value="Enviar">
            </form>
        </div>
        
        <?php
            }else{
                echo '<table style="border-color: #f34;"> <tr style="boreder: #f34 solid 1px;"><td>NUMERO<td><td>CUADRADO</td><td>CUBO</td></tr>';
                for($i = $num; $i < $num + 5; $i++){
                    echo '<tr><td>', $i, '<td>', $i * $i, '</td><td>', $i * $i * $i, '</td></tr>';
                }
                echo '</table>';
            }
        ?>
        </table>
    </body>
</html>
