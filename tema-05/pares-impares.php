<!DOCTYPE html>
<!--
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Número pares e impares</title>
    </head>
    <body>     
        <?php
            if (!isset($_GET['numero'])) {
                $contadorNumeros = 0;
                $numeroTexto = "";
            } else {
                $contadorNumeros = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
            }

            if ($contadorNumeros < 9) {
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

            if (!isset($_GET['numero']) || ($contadorNumeros < 9)) {
        ?>
            <form action="pares-impares.php" method="get">
                Introduzca un número:
                <input type="number" name ="numero" autofocus="" required="">
                <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
                <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                <input type="submit" value="OK">
            </form>
        <?php
            }

            if ($contadorNumeros == 9) {
                $valor = explode(" ", $numeroTexto);

                foreach ($valor as $numero) {
                    if ($numero % 2 == 0) {
                        echo "<span style=\"color: green;\">$numero&nbsp;&nbsp;</span>";
                    } else {
                        echo "<span style=\"color: red;\">$numero&nbsp;&nbsp;</span>";
                    }
                }
            }
        ?>
    </body>
</html>