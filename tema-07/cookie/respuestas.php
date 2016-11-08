<?php session_start(); ?>
<!DOCTYPE html>
<!--
Respuestas a todos los ejercicios
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Respuestas</title>
    </head>
    <body>
        <div id="content">            
            <?php
                include $_REQUEST['ejercicio'].'.php';
            ?>
        </div>
    </body>
</html>
