<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
    <?php
        include_once 'Car.php';
        
        $juanCar = new Car("BMW", "i5");
        $miguelCar = new Car("VW", "Golf");
        
        $juanCar->run(30);
        $juanCar->run(120);
        $juanCar->run(50);
        $miguelCar->run(10);
        $miguelCar->run(110);
        $miguelCar->run(30);
        
        echo "Juan a recorrido con su coche ".$juanCar->getKm()."Km<br>";
        echo "Miguel a recorrido con su coche ".$miguelCar->getKm()."Km<br>";
        echo 'Los dos coches han recorrido un total de '.Car::getKmTotal()."km";
    ?>
</body>
</html>