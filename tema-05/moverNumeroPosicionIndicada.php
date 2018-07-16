<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
el array resultante.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mover número a una posición indicada</title>
    </head>
    <body>     
    <?php
        if (!isset($_GET['numero'])) {
            $contadorNumeros = 1;
            $numeroTexto = "";
        } else {
            $contadorNumeros = $_GET['contadorNumeros'];
            $numeroTexto = $_GET['numeroTexto'];
        }

        if ($contadorNumeros < 11) {
            $contadorNumeros = $_GET['contadorNumeros'];
            $numero = $_GET['numero'];
            $numeroTexto = $_GET['numeroTexto'];

            if ($numeroTexto == "") {
                $numeroTexto = $numero;
            } else {
                $numeroTexto = $numeroTexto.' '.$numero;
            }

            $contadorNumeros++;
        }

        if (!isset($_GET['numero']) || ($contadorNumeros < 11)) {
        ?>
          <form action="moverNumeroPosicionIndicada.php" method="get">
            Introduzca un número:
            <input type="number" name ="numero" autofocus="" required="">
            <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="submit" value="OK">
          </form>
        <?php
        }

        // pedir posición inicial y final
        if ($contadorNumeros == 11) {
            $valor = explode(" ", $numeroTexto);

            // Muestra el array original
            echo "Array original:<br>";
            echo "<table><tr>";

            for ($i = 0; $i < 10; $i++) {
                echo "<td>$i</td>";
            }

            echo "</tr><tr>";

            for ($i = 0; $i < 10; $i++) {
                echo "<td>".$valor[$i]."</td>";
            }
          
            echo "</tr></table>";

            // pedir las posiciones inicial y final
        ?>
            <form action="moverNumeroPosicionIndicada.php" method="get">
                Posición inicial: <input type="number" name="inicial" autofocus="" min="0" max="9" required=""><br>
                Posición final: <input type="number" name="final" min="0" max="9" required=""><br>
                <input type="hidden" name="contadorNumeros" value="13">
                <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                <input type="hidden" name="n" value="basura">
                <input type="submit" value="OK">
            </form>
        <?php
        }

        // introducir los números y las posiciones inicial y final
        if ($contadorNumeros == 13) {
            $inicial = $_GET['inicial'];
            $final = $_GET['final'];

            if (($inicial >= $final) || ($inicial < 0) || ($inicial > 9) || ($final < 0) || ($final > 9)) {
                echo 'Los datos introducidos no son correctos';
            } else {
                $valor = explode(" ", $numeroTexto);

                // Muestra el array original
                echo "Array original:<br>";
                echo "<table><tr>";
                
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$i</td>";
                }
            
                echo "</tr><tr>";

                for ($i = 0; $i < 10; $i++) {
                    echo "<td>".$valor[$i]."</td>";
                }
                
                echo "</tr></table>";

                // Rotación
                $auxiliar = $valor[9];
                for ($i = 9; $i > $final; $i--) {
                    $valor[$i] = $valor[$i - 1];
                }
                
                $valor[$final] = $valor[$inicial];

                for ($i = $inicial; $i > 0; $i--) {
                    $valor[$i] = $valor[$i - 1];
                }
            
                $valor[0] = $auxiliar;

                // Muestra el array resultante
                echo "<br><br>Inicial: $inicial Final: $final<br>";
                echo "<br>Array resultante:<br>";
                echo "<table><tr>";
            
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$i</td>";
                }
            
                echo "</tr><tr>";

                for ($i = 0; $i < 10; $i++) {
                    echo "<td>".$valor[$i]."</td>";
                }
                
                echo "</tr></table>";
            }
        }
        ?>
    </body>
</html>