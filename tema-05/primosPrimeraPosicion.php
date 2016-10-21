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
            }else{
                $contadorNumeros = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
            }

            if ($contadorNumeros < 5) {
                $contadorNumeros = $_GET['contadorNumero'];
                $numero = $_GET['numero'];
                $numeroTexto = $_GET['numeroTexto'];
                
                if($numeroTexto == ""){
                    $numeroTexto = $numero;
                }else{
                    $numeroTexto = $numeroTexto." ".$numero;
                }
            }
            
            //formulario
            if (($contadorNumeros < 5) || (!isset($_GET['numero']))) {
        ?>
            <form action="primosPrimeraPosicion.php" method="get">
                Introduzca un número:
                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contadorNumeros" value="<?php ++$contadorNumeros; ?>">
                <input type="hidden" name="numeroTexto" value="<?php $numeroTexto; ?>">
                <input type="submit" value="OK">
            </form>
        <?php
            }
            
            if($contadorNumeros == 6){
                $valor = explode(" ", $numeroTexto);
                
                // Muestra el array original
                echo "Array:<br>";
                echo "<table><tr>";

                for ($i = 0; $i < 5; $i++) {
                    echo "<td>$i</td>";
                }

                echo "</tr><tr>";

                for ($i = 0; $i < 5; $i++) {
                    echo "<td>".$valor[$i]."</td>";
                }

                echo "</tr></table>";
            }     
            
            //contar los pares e impares
            $cuentaPrimos = 0;
            $cuentaNoPrimos = 0;

            for($i = 0; $i < 5; $i++) {
                $esPrimo = true;

                for($j = 2; $j < $numero[$i]; $j++) {
                    if(($numero[$i] % $j) == 0){
                        $esPrimo = false;
                    }
                }

                if ($esPrimo) {
                    $primos[$cuentaPrimos] = $numero[$i];
                    $cuentaPrimos++;
                } else {
                    $noPrimos[$cuentaNoPrimos] = $numero[$i];
                    $cuentaNoPrimos++;
                }
            }
            
            //modificar el array poniendo los primos por delante
            for($i = 0; $i < $cuentaPrimos; $i++){
                $numero[$i] = $primos[$i];
            }
            
            for($i = $cuentaPrimos; $i < $cuentaPrimos + $cuentaNoPrimos; $i++){
                $numero[$i] = $noPrimos[$i - $cuentaPrimos];
            }
            
            // Muestra el array con primos y no primos
            echo "<br>Array con primos por delante:<br>";
            echo "<table><tr>";

            for ($i = 0; $i < 5; $i++) {
                echo "<td>$i</td>";
            }

            echo "</tr><tr>";

            for ($i = 0; $i < 5; $i++) {
                if($numero[$i] == $primos[$i]){
                    echo "<span style=\"color: green;\">$numero[$i]&nbsp;&nbsp;</span>";
                }else{
                    echo "<span style=\"color: red;\">$numero[$i]&nbsp;&nbsp;</span>";
                }
            }

            echo "</tr></table>";
        ?>
    </body>
</html>