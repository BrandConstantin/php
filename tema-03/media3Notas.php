<!DOCTYPE html>
<!--
Realiza un programa que calcule la media de tres notas.
-->
<html>
    <head>
        <title>Media 3 Notas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Calcular media notas</h1>
        <hr style="border-style: dotted 1px #f34">
        <div>
            <form action="media3Notas.php" method="post">
                <p>Introduce I nota:</p><input type="number" name="nota1"><br>
                <p>Introduce II nota:</p><input type="number" name="nota2"><br>
                <p>Introduce III nota:</p><input type="number" name="nota3"><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            
            $media = ($nota1 + $nota2 + $nota3) / 3;
            
            echo '<h1>Tu media es de: ', round($media, 1), '</h1>';
        ?>
    </body>
</html>
