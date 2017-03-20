<?php
$contador = $_COOKIE['contador'];
    
if(isset($_COOKIE['contador'])){
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 31536000);
    echo 'El numero de visitas a esta página es <h1>'.$contador.'</h1>';
}else{
    setcookie('contador', 1, time() + 31536000);
    echo 'Bienvenido por primera vez';
}
?>

<html>
    <head>
        <title>Ejercicio 6</title>
        <meta charset="utf-8">
    </head>
    <body>

    </body>
</html>