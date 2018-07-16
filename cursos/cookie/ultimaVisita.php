<?php
//para guardar fecha y hora de la ultima visita en la página
$fecha = date('d/mY ||| H:i:s');

//guardar la cookie durante un año
setcookie('fecha', $fecha, time() + 3153600);

if(isset($_COOKIE['fecha'])){
    echo 'La ultima visita tuya fue '.$_COOKIE['fecha'];
}else{
    echo 'Bienvenido por primera vez';
}
?>
<html>
    <head>
        <title>Ejercicio 5</title>
        <meta charset="utf-8">
    </head>
    <body>

    </body>
</html>