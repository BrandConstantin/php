<!DOCTYPE html>
<!--
Escribe un programa que lea un número N e imprima una pirámide de números con N filas como
en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier
para que los espacios tengan la misma anchura que los números. 1
-->
<html>
    <head>
        <title>Piramide con N filas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Piramide con N filas</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <form action="piramideConNfilas.php" method="post">
            <p>Introduce altura:</p>
            <input type="number" name="altura" autofocus ><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            $altura = $_POST['altura'];
            
            if(!isset($altura)){
                $altura = 0;
            }
            
            $numero = 1;
    
            for ($a = 1; $a <= $altura; $a++) {
                for ($espacio = 0; $espacio < ($altura - $a); $espacio++){
                    echo "&nbsp;";
                }
                
                for ($numero = 1; $numero <= $a; $numero++) {
                    echo $numero;
                }
                
                for ($numero = $a - 1; $numero > 0; $numero--) {
                    echo $numero;
                }
                
                echo "<p>";
            }
        ?>
        </div>   
    </body>
</html>