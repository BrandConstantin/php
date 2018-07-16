<?php

session_start();

include_once 'Poker.php';

//se crean 5 dados si no están creados y se añaden en una sesión
if(!isset($_SESSION['myDices'])){
    $_SESSION[myDices] = serialize(array(new Poker(), new Poker(),
        new Poker(), new Poker(), new Poker()));
}

if(!isset($_SESSION['totalThrows'])){
    $_SESSION['totalThrows'] = 0;
}

//se actualiza los objetos y la clase con los dados de las sesión
$myDices = unserialize($_SESSION['myDices']);
Poker::setTotalThrows($_SESSION['totalThrows']);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dados de Poker</title>
  </head>
  <body>
      <?php
        echo "Dices: ";
        
        foreach ($myDices as $dice){
            $dice->throwFace();
            echo ($dice->nameFace())." ";
        }
        
        echo "<br>Total throws of dices: ".Poker::getTotalThrows();
        echo "<br>Total throws of beaker:".(Poker::getTotalThrows()/5);
        
        //se actualiza la sesión con los datos de los objetos y la clase
        $_SESSION['myDices'] = serialize($myDices);
        $_SESSION['totalThrows'] = Poker::getTotalThrows();
      ?>
  </body>
</html>