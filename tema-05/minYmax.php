<!DOCTYPE html>
<!--
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Número minimo y máximo</title>
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

            if ($contadorNumeros == 10) {
                // añade el último número leído
                $numeroTexto = $numeroTexto . " " . $numero; 
                // quita espacios sobrantes
                $numeroTexto = substr($numeroTexto, 2); 
                $valor = explode(" ", $numeroTexto);

                $max = -PHP_INT_MAX;
                $min = PHP_INT_MAX;

                foreach ($valor as $numero) {
                    if ($numero < $min) {
                        $min = $numero;
                    }
                    if ($numero > $max) {
                        $max = $numero;
                    }
                }

                foreach ($valor as $numero) {
                    if ($numero == $min) {
                        echo "$numero mínimo<br>";
                    } else if ($numero == $max) {
                        echo "$numero máximo<br>";
                    } else {
                        echo "$numero<br>";
                    }
                }
            }
            
            if (($contadorNumeros < 10) || (!isset($numero))) {
        ?>
            <form action="minYmax.php" method="get">
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