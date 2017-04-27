<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pizzeria</title>
    </head>
    <body>
        <?php
        include_once './Pizza.php';
        
        if(!isset($_SESSION["funghi"])){
            $_SESSION['margarita'] = serialize(new pizza('Margarita', 'familiar', 'pedida'));
            $_SESSION['cuatro quesos'] = serialize(new pizza('Cuatro Quesos', 'mediana', 'no pedida'));
            $_SESSION['funghi'] = serialize(new pizza('Funghi', 'pequeña', 'pedida'));
        }
        
        $margarita = unserialize($_SESSION['margarita']);
        $cuatroQuesos = unserialize($_SESSION['cuatro quesos']);
        $funghi = unserialize($_SESSION['funghi']);
        
        $margarita->sirve();
        $funghi->sirve();
        
        echo $margarita;
        echo $cuatroQuesos;
        echo $funghi;
        
        echo Pizza::getNumPedidas();
        echo Pizza::getNumServidas();
        ?>
    </body>
</html>