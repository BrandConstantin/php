<!DOCTYPE html>
<!-- Escribe un programa que lea 7 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rotar array derecha</title>
    </head>
    <body>
        <?php
            $numero = $_GET['numero'];
            $contadorNumeros = $_GET['contadorNumeros'];
            $numeroTexto = $_GET['numeroTexto'];

            if (!isset($numero)) {
                $contadorNumeros = 0;
                $numeroTexto = "";
            }

            if ($contadorNumeros == 7) {
                // añade el último número leído
                $numeroTexto = $numeroTexto . " " . $numero; 
                // quita espacios sobrantes
                $numeroTexto = substr($numeroTexto, 2); 

                $valor = explode(" ", $numeroTexto);

                // Muestra el array original

                echo "Array:<br>";

                echo "<table><tr>";

                for ($i = 0; $i < 7; $i++) {
                    echo "<td>$i</td>";
                }

                echo "</tr>";

                for ($i = 0; $i < 7; $i++) {
                    echo "<td>".$valor[$i]."</td>";
                }

                echo "</tr></table>";
                
                //print_r($valor);
                
                //rotar el array
                $auxiliar = $valor[6];

                for($i = 6; $i > 0; $i--){
                    $valor[$i] = $valor[$i - 1];
                }

                $valor[0] = $auxiliar;

                //mostrar el array invertido
                /*echo("<br>");
                print_r( $valor);*/
                
                echo "<br>Array invertido:";

                echo "<table><tr>";

                for ($i = 0; $i < 7; $i++) {
                    echo "<td>$i</td>";
                }

                echo "</tr>";

                for ($i = 0; $i < 7; $i++) {
                    echo "<td>".$valor[$i]."</td>";
                }

                echo "</tr></table>";
            }
         
            if (($contadorNumeros < 7) || (!isset($numero))) {
        ?>
        <form action="rotarArrayDerecha.php" method="get">
                Introduzca un número:
                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
                <input type="submit" value="OK">
            </form>
        <?php
            } 
        ?>        
    </body>
</html>