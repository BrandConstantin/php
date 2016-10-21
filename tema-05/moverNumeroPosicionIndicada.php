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
        <title>Pares primera posición</title>
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

            if ($contadorNumeros < 6) {
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

            if (!isset($_GET['numero']) || ($contadorNumeros < 6)) {
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

            if ($contadorNumeros == 6) {
                $valor = explode(" ", $numeroTexto);

                // Muestra el array original
                echo "Array original:<br>";
                echo "<table><tr>";
                for ($i = 0; $i < 5; $i++) {
                    echo "<td>$i</td>";
                }
                echo "</tr><tr>";

                for ($i = 0; $i < 5; $i++) {
                    echo "<td>".$valor[$i]."</td>";
                }
                echo "</tr></table>";
                
                //pide posiciones
            ?>
                <form action="moverNumeroPosicionIndicada.php" method="get">
                    Introduzca posición inicial:
                    <input type="number" name ="inicial" min="0" max="9" autofocus="" required="">
                    Introduzca posición final:
                    <input type="number" name ="final" min="0" max="9" autofocus="" required="">
                    <input type="hidden" name="contadorNumeros" value="8">
                    <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                    <input type="hidden" name="numero" value="eliminar">
                    <input type="submit" value="OK">
                </form>
            <?php
            }
                
            if ($contadorNumeros == 8) {
                $inicial = $_GET['inicial'];
                $final = $_GET['final'];
                
                if(($inicial >= $final) || ($inicial < 0) || ($inicial > 4) || ($final < 0) || ($final > 4)){
                    echo 'Datos incorrectos!';
                }else{
                    $valor = explode(" ", $numeroTexto);
                    
                    // Muestra el array original
                    echo "Array original:<br>";
                    echo "<table><tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>$i</td>";
                    }
                    echo "</tr><tr>";

                    for ($i = 0; $i < 5; $i++) {
                        echo "<td><span style=\"color: red;\">$valor[$i]&nbsp;&nbsp;</span></td>";
                    }
                    echo "</tr></table>";
                    
                    
                    //rotar el array
                    $auxiliar = $valor[4];
                    for ($i = 4; $i > $final; $i--) {
                      $valor[$i] = $valor[$i - 1];
                    }
                    $valor[$final] = $valor[$inicial];

                    for ($i = $inicial; $i > 0; $i--) {
                      $valor[$i] = $valor[$i - 1];
                    }
                    $valor[0] = $auxiliar;
                    
                    //mostar el array resultante
                    echo "Array resultante:<br>";
                    echo "<table><tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>$i</td>";
                    }
                    echo "</tr><tr>";

                    for ($i = 0; $i < 5; $i++) {
                        echo "<td><span style=\"color: green;\">$valor[$i]&nbsp;&nbsp;</span></td>";
                    }
                    echo "</tr></table>";
                }
            }
        ?>
    </body>
</html>