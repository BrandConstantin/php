<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.
-->
<html>
    <head>
        <title>Media Números Positivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Media números positivos</h1>
        <hr style="border-style: dotted 1px #f34">
        <div>
            <form action="mediaNumPositivos.php" method="post">
                <p>Introduce un otro número positivo:</p>
                <input type="number" name="num" min="1" max="20" autofocus>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>
