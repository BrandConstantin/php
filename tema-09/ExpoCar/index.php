<?php

session_start();

include_once 'ExpoCar.php';

if(!isset($_SESSION["zones"])){
    $_SESSION[zones] = serialize(array(
       new ExpoCar("Principal Zone", 1500, 200) ,
       new ExpoCar("Trading Zone", 500, 50),
       new ExpoCar("VIP Zone", 100, 10)
    ));
}

$zones = unserialize($_SESSION["zones"]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ExpoCar</title>
  </head>
  <body>
  <h1>ExpoCar</h1>
  <hr>
  <?php
    $selectionZone = $_POST['selectionZone'];
    $entryNumber = $_POST['entryNumber'];
    
    if(isset($selectionZone)){
        if($zones[$selectionZone]->sell($entryNumber)){
            echo '<script type="text/javascript">alert("'. $entryNumber. 
                    ' sell entry in ' . $zones[$selectionZone]->getDescription() .
                    '");</script>';
        } else {
          echo '<script type="text/javascript">alert("Sorry, the sale could not be completed.");</script>';
        }
    }
    
    //mostrar información de la zona
    foreach ($zones as $z){
        echo $z;
    }
    
    //guarda toda la información de las zonas en sesión 
    $_SESSION["zones"]= serialize($zones);
  ?>
  <h3>Entry Sell</h3>
  <form action="index.php" method="post">
      Number of entry:
      <input type="number" name="entryNumber" min="1" max="10" autofocus="" >
      <select name="selectionZone">
          <?php
            $i = 0;
            foreach ($zones as $z){
                echo "<option value='".$i.'">'.$z->getDescription().'</option>';
                $i++;
            }
          ?>
      </select>
      <input type="submit" value="SELL">
  </form>
  </body>
</html>