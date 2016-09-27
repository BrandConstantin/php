<!DOCTYPE html>
<!--
Escribe un programa que utilice las variables $x y $y . Asignales los valores 
144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada 
variable, la suma, la resta, la división y la multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $x = 144;
            $y = 999;
            $suma = $x + $y;
            $resta = $x - $y;
            $multiplica = $x * $y;
            $divide = $x / $y;
        ?>
        <h1>
            Variables originales: <?php echo $x, "  y  ", $y, "<br>"?>
            Suma variables: <?php echo $x, "  +  ", $y, " = ", $suma, "<br>"?>
            Resta variables: <?php echo $x, "  -  ", $y, " = ", $resta, "<br>"?>
            División variables: <?php echo $x, "  /  ", $y, " = ", $divide, "<br>"?>
            Multiplicación variables: <?php echo $x, "  *  ", $y, " = ", $multiplica, "<br>"?>
        </h1>
    </body>
</html>
