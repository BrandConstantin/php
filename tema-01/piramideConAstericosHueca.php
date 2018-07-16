<!DOCTYPE html>
<!--
Escribe un programa que pinte por pantalla una pirámide rellena a base de 
asteriscos. La base de la pirámide debe estar formada por 9 asteriscos. Pero la 
piramide tiene que ser hueca
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $ast = "*";
            
            echo '<p style="margin-left: 45%;">&nbsp;&nbsp;&nbsp;&nbsp;',$ast,'</p>'; 
            echo '<p style="margin-left: 45%;">&nbsp;&nbsp;&nbsp;',$ast, '&nbsp;', '&nbsp;', $ast,'</p>';
            echo '<p style="margin-left: 45%;">&nbsp;&nbsp;',$ast, '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', $ast,'</p>';
            echo '<p style="margin-left: 45%;">&nbsp;',$ast, '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', $ast,'</p>';
            echo '<p style="margin-left: 45%;">',$ast, $ast, $ast, $ast, $ast, $ast, $ast, $ast, $ast,'</p>';
        ?>
    </body>
</html>
