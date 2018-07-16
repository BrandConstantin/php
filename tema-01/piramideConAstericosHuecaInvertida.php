<!DOCTYPE html>
<!--
Igual que anteriormente pero la piramide tiene que estar invertida
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $ast = "*";
            echo '<p style="margin-left: 45%;">',$ast, $ast, $ast, $ast, $ast, $ast, $ast, $ast, $ast,'</p>';
            echo '<p style="margin-left: 45%;">&nbsp;',$ast, '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', $ast,'</p>';
            echo '<p style="margin-left: 45%;">&nbsp;&nbsp;',$ast, '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', $ast,'</p>';
            echo '<p style="margin-left: 45%;">&nbsp;&nbsp;&nbsp;',$ast, '&nbsp;', '&nbsp;', $ast,'</p>';
            echo '<p style="margin-left: 45%;">&nbsp;&nbsp;&nbsp;&nbsp;',$ast,'</p>'; 
            
            
            
            
        ?>
    </body>
</html>
