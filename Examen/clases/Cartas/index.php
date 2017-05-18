<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
suman según el juego de la brisca. La salida de este programa es análoga a la del ejercicio realizado
en clase del capítulo sobre arrays. El programa se dividirá ahora en dos partes: la definición de la
clase Carta y el programa principal. Emplea un array asociativo como atributo de clase para obtener
los puntos a partir del nombre de la figura de la carta. Cada carta que se muestra debe ser un objeto
de la clase Carta. No es necesario comprobar si se repiten o no las cartas echadas.
-->
<?php
require 'Cartas.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cartas</title>
    </head>
    <body>
        <h3>Brisca</h3>
        <p>Sacamos 10 cartas:</p>        
        <?php
        for ($i = 0; $i < 10; $i++) {
            $carta = new Cartas();
            echo $carta . "<br>"; 
        }
        ?>        
        <p>Puntos totales: <?=Cartas::getPuntosTotales()?></p>
    </body>
</html>
