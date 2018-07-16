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
                <form action="primosPrimeraPosicion.php" method="get">
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

                // diferenciar los primos de no primos
                $cuentaPrimos = 0;
                $cuentaNoPrimos = 0;

                for ($i = 0; $i < 5; $i++) {
                    $esPrimo = true;

                    for ($j = 2; $j < $valor[$i]; $j++) {
                        if (($valor[$i] % $j) == 0) {
                        $esPrimo = false;
                        }
                    }

                    if ($esPrimo) {
                        $primos[$cuentaPrimos] = $valor[$i];
                        $cuentaPrimos++;
                    } else {
                        $noPrimos[$cuentaNoPrimos] = $valor[$i];
                        $cuentaNoPrimos++;
                    }
                }

                // guardar los datos en el array original

                for ($i = 0; $i < $cuentaPrimos; $i++) {
                    $valor[$i] = $primos[$i];
                }

                for ($i = $cuentaPrimos; $i < $cuentaPrimos + $cuentaNoPrimos; $i++) {
                    $valor[$i] = $noPrimos[$i - $cuentaPrimos];
                }

                // Muestra el array resultante
                echo "<br>Array resultante:<br>";
                echo "<table><tr>";
                for ($i = 0; $i < 5; $i++) {
                    echo "<td>$i</td>";
                }
                echo "</tr><tr>";

                for ($i = 0; $i < 5; $i++) {
                    if($valor[$i] == $primos[$i]){
                        echo "<td><span style=\"color: green;\">$valor[$i]&nbsp;&nbsp;</span></td>";
                    }else{
                        echo "<td><span style=\"color: red;\">$valor[$i]&nbsp;&nbsp;</span></td>";
                    }
                }
                echo "</tr></table>";
            }
        ?>
    </body>
</html>