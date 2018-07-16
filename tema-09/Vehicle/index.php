<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"
    </head>
    <body>
       <?php
        include_once 'Bike.php';
        include_once 'Car.php';
        
        //crear una moto
        $myBike = new Bike(220, "yellow");
        
        //crear un coche
        $myCar = new Car(1930, 3);
        
        $myBike->run(89);
        $myCar->run(93);
        
        echo $myBike->broke()."<br>";
        echo $myBike->color()."<br>";
        echo $myCar->accelerate()."<br>";
        
        $myBike->run(75);
        
        echo "Mi moto ha recorrido ".$myBike->getKmRun()." km totales<br>";
        echo "Mi coche ha recorrido ".$myCar->getKmRun()." km totales<br>";
        echo "Hay un total de ".Vehicle::getNumVehicle()." vehiculos creados<br>";
        echo "El total de todos los km de los coches y las motos es de ".
                Vehicle::getKmTotal();
       ?>
    </body>
</html>
