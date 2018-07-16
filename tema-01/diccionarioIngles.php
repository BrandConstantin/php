<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //palabras en ingles
            $en1 = 'yellow';
            $en2 = 'pink';
            $en3 = 'red';
            $en4 = 'green';
            $en5 = 'blue';
            $en6 = 'grey';
            $en7 = 'black';
            $en8 = 'white';
            $en9 = 'purple';
            $en10 = 'maron';
            
            //palabras en español
            $es1 = 'amarillo';
            $es2 = 'roza';
            $es3 =  'rojo';
            $es4 = 'verde';
            $es5 = 'azul';
            $es6 = 'gris';
            $es7 = 'negro';
            $es8 = 'blanco';
            $es9 = 'morado';
            $es10 = 'maron';
        ?>    
            
        <table style="border: aqua dotted 3px; margin-left: 45%;">
                <?php
                    echo "<tr><td> $en1 </td><td> $es1 </td></tr>";
                    echo "<tr><td> $en2 </td><td> $es2 </td></tr>";
                    echo "<tr><td> $en3 </td><td> $es3 </td></tr>";
                    echo "<tr><td> $en4 </td><td> $es4 </td></tr>";
                    echo "<tr><td> $en5 </td><td> $es5 </td></tr>";
                    echo "<tr><td> $en6 </td><td> $es6 </td></tr>";
                    echo "<tr><td> $en7 </td><td> $es7 </td></tr>";
                    echo "<tr><td> $en8 </td><td> $es8 </td></tr>";
                    echo "<tr><td> $en9 </td><td> $es9 </td></tr>";
                    echo "<tr><td> $en10 </td><td> $es10 </td></tr>";
                ?>
            </table>
        
    </body>
</html>
