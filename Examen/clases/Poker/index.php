<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

include './Poker.php';

//se crean 5 dados si no estan creados y se añaden a la sesión
if(!isset($_SESSION['dado'])){
    $_SESSION['dado'] = serialize(array(new Poker(), new Poker(), new Poker(), new Poker(), new Poker()));
}

if(!isset($_SESSION['totalTiradas'])){
    $_SESSION['totalTiradas'] = 0;
}

//se actualiza los objetos y la clase con los dados de la sesión
$dado = unserialize($_SESSION['dado']);
Poker::setTotalTiradas($_SESSION['totalTiradas']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dados de Poker</title>
  </head>
  <body>
    <?php
        echo 'Dados: ';
        
        foreach ($dado as $v) {
            $v->caraTirada();
            echo ($v->nombreCara())." ";
        }
        
        echo "<br>Total tiradas del dado: ".Poker::getTotalTiradas();
        echo '<br>Total tiradas: '.Poker::getTotalTiradas() / 5;
        
        //se actualiza la sesión con los dados de los objetos y la clase
        $_SESSION['dado'] = serialize($dado);
        $_SESSION['totalTiradas'] = Poker::getTotalTiradas();
    ?>
  </body>
</html>