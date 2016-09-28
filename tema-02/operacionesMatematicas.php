<!DOCTYPE html>
<!--
Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
-->
<html>
    <head>
        <title>Operaciones Matematicas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Operaciones Matematicas</h3>
            <?php
                $x = $_GET["x"];
                $y = $_GET["y"];
                $suma = $x + $y;
                $resta = $x - $y;
                $multiplica = $x * $y;
                $divide = $x / $y;
            ?>
            
            <table style="border-color: black 1px; border-style: groove">
                <tr><td>Suma</td><td>Resta</td><td>Multiplicación</td><td>División</td></tr>
                <tr><td><?php echo $suma ?></td><td><?php echo $resta ?></td><td><?php echo $multiplica ?></td><td><?php echo $divide ?></td></tr>
            </table>
        </div>
    </body>
</html>
