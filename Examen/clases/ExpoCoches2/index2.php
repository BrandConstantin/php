<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

include_once 'ExpoCoches.php';

if(!isset($_SESSION["zonas"])){
    $_SESSION["zonas"] = serialize(array(
       new ExpoCoches("Zona Principal", 1500, 1000) ,
       new ExpoCoches("Zona de Ocio", 500, 100),
       new ExpoCoches("Zona Vip", 100, 25)
    ));
}

$zonas = unserialize($_SESSION["zonas"]);

?>

<!DOCTYPE html>
<!--
Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.-->
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
    
    //vender entradas
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
    if (is_array($zonas) || is_object($zonas)){
        foreach ($zonas as $z){
            echo $z;
        }
    }
    
    //guarda toda la información de las zonas en sesión 
    $_SESSION["zonas"]= serialize($zonas);
  ?>
  
  <!--comprar entradas-------------------------------->
  <h3>Vender Entradas:</h3> 
  <form action="index2.php" method="post">
      Numero de entradas:
      <input type="number" name="numEntradas" min="1" max="10" autofocus="" >
      <select name="zonaSeleccionada">
          <?php
            $i = 0;
            if (is_array($zonas) || is_object($zonas)){
                foreach ($zonas as $z){
                    echo "<option value='".$i."'>".$z->getDescripcion().'</option>';
                    $i++;
                }
            }
          ?>
      </select>
      <input type="submit" value="Vende">
  </form>
  
    <!--zona nueva-------------------------------->
    <?php crear(); ?>
    <h3>Crear Zona Nueva:</h3>
    <form action="index2.php" method="post">
        Nombre: <input type="text" name="zonaNueva" required="">
        Plazas: <input type="number" min="1" placeholder="1000" name="plazasZonaNueva" required="">
        <input type="hidden" name="plazasLibreZonaNueva">
        <input type="submit" name="crear" value="Crear">
    </form>
    <?php
    //función de crear zona nueva
    function crear(){
        if(isset($_POST['crear'])){
            $zonas = new ExpoCoches($_POST['zonaNueva'], $_POST['plazasZonaNueva'], $_POST['plazasLibreZonaNueva']);

            //guarda toda la información de las zonas en sesión 
            $_SESSION["zonas"]= serialize($zonas);
            
            //serializamos y guardamos la información
            echo '<p>Zona creada exitosamente!';
        }
    }      
    ?>
    <!--borrar zona-------------------------------->
    <?php crear(); ?>
    <h3>Borrar Zona:</h3>
    <form action="index2.php" method="post">
        <select name="borrarZona">
            <?php
                //mostrar todas las zonas
                if (is_array($zonas) || is_object($zonas)){
                    foreach ($zonas as $z){
                        echo $z;
            ?>
            <option value="<?= $z->getDescripcion() ?>"><?= $z->getDescripcion() ?></option>
            <?php
                    }
                }
            ?>            
        </select>
        <input type="submit" name="borrar" value="Borrar Zona">
    </form>
    <?php
    //función de crear zona nueva
    function borrar(){
        if(isset($_POST['borrar'])){
            // Hacmos un unset para borrar la zona del array $_SESSION["zona"]
            unset($_SESSION["zonas"][$_POST["borrarZona"]]);
            
            //serializamos y guardamos la información
            echo '<p>Zona borrada exitosamente!';
        }
    }      
    ?>
  </body>
</html>