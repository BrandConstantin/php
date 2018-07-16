<!DOCTYPE html>
<!-- 
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambiar Números</title>
    </head>
    <body>
        <?php    
            if (!isset($_GET['numeroTexto'])) {
                // generar array aleatorio
                for ($i = 0; $i < 100; $i++) {
                    $valor[$i] = rand(0, 20);
                    echo $valor[$i]." ";
                }

                $numeroTexto = implode(" ", $valor);
        ?>
                <form action="cambiarNumeros.php" method="get">
                    Introducir número a sustituir:
                    <input type="number" name ="numeroViejo" autofocus="" required=""><br>
                    Introducir número nuevo:
                    <input type="number" name ="numeroNuevo" required="">
                    <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                    <input type="submit" value="OK">
                </form>
        <?php
            } else {
                $numeroTexto = $_GET['numeroTexto'];
                $numeroViejo = $_GET['numeroViejo'];
                $numeroNuevo = $_GET['numeroNuevo'];

                $valor = explode(" ", $numeroTexto);

                foreach ($valor as $numero) {
                    if ($numero == $numeroViejo) { 
                        echo "<span style=\"color: red; font-weight: bold; font-size: 30px;\">$numeroNuevo</span> ";
                    } else {
                        echo  "$numero ";
                    }
                }
            }
        ?>
    </body>
</html>