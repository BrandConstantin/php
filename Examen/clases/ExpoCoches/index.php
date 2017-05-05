<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

include_once 'ExpoCoches.php';

if(!isset($_SESSION["zonas"])){
    $_SESSION["zonas"] = serialize(array(
       new ExpoCoches("Zona Principal", 1500, 200) ,
       new ExpoCoches("Zona de Ocio", 500, 50),
       new ExpoCoches("Zona Vip", 100, 10)
    ));
}

$zonas = unserialize($_SESSION["zonas"]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ExpoCoches</title>
  </head>
  <body>
  <h1>ExpoCoches</h1>
  <hr>
  <?php
    $zonaSeleccionada = $_POST['zonaSeleccionada'];
    $numEntradas = $_POST['numEntradas'];
    
    if(isset($zonaSeleccionada)){
        if($zonas[$zonaSeleccionada]->vende($numEntradas)){
            echo '<script type="text/javascript">alert("'. $numEntradas. 
                    ' vendidas en ' . $zonas[$zonaSeleccionada]->getDescripcion() .
                    '");</script>';
        } else {
          echo '<script type="text/javascript">alert("Lo sentimos, no hay entradas disponibles.");</script>';
        }
    }
    
    //mostrar información de la zona
    foreach ($zonas as $z){
        echo $z;
    }
    
    //guarda toda la información de las zonas en sesión 
    $_SESSION["zonas"]= serialize($zonas);
  ?>
  <h3>Vender Entradas:</h3> 
  <form action="index.php" method="post">
      Number of entry:
      <input type="number" name="numEntradas" min="1" max="10" autofocus="" >
      <select name="zonaSeleccionada">
          <?php
            $i = 0;
            foreach ($zonas as $z){
                echo "<option value='".$i."'>".$z->getDescripcion().'</option>';
                $i++;
            }
          ?>
      </select>
      <input type="submit" value="Vende">
  </form>
  </body>
</html>