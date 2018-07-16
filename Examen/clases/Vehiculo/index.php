<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
include_once './Coche.php';
include_once './Motos.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            //crear un coche
            $coche1 = new Coche("", "", 1900, 3);
            $coche1->recure(55);
            
            echo "El coche1 accelera ".$coche1->accelerar()."<br>";
            echo "Coche 1:";
            echo "<br>El coche ha recurido la ultima vez un total de: ". $coche1->getKmRecuridos();            
            $coche1->recure(105);
            echo "<br>El coche va a recorrer otros km el total siendo de ". $coche1->getKmRecuridos();         
            echo "<br>Total km acumulados por este coche: ". $coche1->getTotalKm();
            
            $coche2 = new Coche("", "", 1800, 5);
            $coche2->recure(155);
            
            echo "<br><br><br>El coche2 accelera ".$coche2->accelerar();
            echo "<br>Coche 2:";
            echo "<br>El coche ha recurido la ultima vez un total de: ". $coche2->getKmRecuridos();            
            $coche2->recure(105);
            echo "<br>El coche va a recorrer otros km el total siendo de ". $coche2->getKmRecuridos();         
            //echo "<br>Total km acumulados por este coche: ". $coche2->getTotalKm();
            
            //crear moto
            $moto = new Motos("", "", 270, "azul-amarillo");
            $moto->recure(350);
            echo "<br><br><br>La moto ha recurido la ultima vez un total de ".$moto->getKmRecuridos();
            $moto->recure(190);
            echo "<br>Total km acumulados por esta moto : ". $moto->getKmRecuridos();            
            echo "<br>".$moto->rompe();
            
            echo "<br><br><br>"
            ."Total vehiculos creados: ". Vehiculo::getNumVehiculos()
            ."<br>Total km acumulados por todos los coches: ". Vehiculo::getTotalKm();
        ?>
    </body>
</html>