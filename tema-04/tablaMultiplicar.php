<!DOCTYPE html>
<!--
Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
en una tabla ( <table> en HTML).
-->
<html>
    <head>
        <title>Tabla Multiplicar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Tabla Multiplicar</h1>
        <hr style="border-style: dotted 1px #f34">
        <table style="border-style: red 2px solid;">
        <?php
            $num = $_POST["num"];
            
            for($i = 0; $i <= 10; $i++){
                $multiplicado = $num * $i;
                echo '<tr><td>', $num, '</td><td> X </td><td>', $i, '</td><td> = </td><td>', $multiplicado, '</td></tr>';
            }
        ?>
        </table>
    </body>
</html>
