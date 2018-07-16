<?php
    if($_COOKIE['visita']){
        echo 'Bienvenido de nuevo!';
    }else{
        //guardar cookie durante un año
        setcookie('visita', 'ok', time() + 31536000);
        echo 'Bienvenido por primera vez aqui!';
    }
?>
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta charset="utf-8">
    </head>
    <body>

    </body>
</html>