<!DOCTYPE html>
<!--
Crea las clases Animal , Mamifero , Ave , Gato , Perro , Canario , Pinguino y Lagarto . Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once 'Canary.php';
            include_once 'Lizard.php';
            include_once 'Pinguin.php';
            include_once 'Dog.php';
            include_once 'Cat.php';
        ?>
        <h3>Canary</h3>
        <?php
            $myCanary = new Canary("female", 3, "grey");
            echo $myCanary->eating("pipes")."<br>";
            echo $myCanary->sleep()."<br>";
            echo $myCanary->clean()."<br>";
            echo $myCanary->fly()."<br>";
            echo $myCanary->layEggs()."<br>";
            echo $myCanary->sing("")."<br>";
            
            $myCanary2 = new Bird("female", 1, "yellow");
            echo $myCanary2->eating("pipes")."<br>";
            echo $myCanary2->fly()."<br>";
            echo $myCanary2->layEggs()."<br>";
        ?>
        <h3>Lizard</h3>
        <?php
            $lizardog = new Lizard("male", 10);
            echo $lizardog->takeSun()."<br>";
            echo $lizardog->hide()."<br>";
            echo $lizardog->eating("worms")."<br>";
        ?>
        <h3>Pinguin</h3>
        <?php
            $myPingu = new Pinguin("male", 4);
            echo $myPingu->clean()."<br>";
            echo $myPingu->fly()."<br>";
            echo $myPingu->swim()."<br>";
            echo $myPingu->eating("fish")."<br>";
            echo $myPingu->sleep()."<br>";
            echo $myPingu->layEggs()."<br>";
        ?>
        <h3>Dog</h3>
        <?php
            $myDog = new Dog("male", 4, "pastor aleman");
            echo $myDog->bark()."<br>";
            echo $myDog->giveMe5()."<br>";
            echo $myDog->trowTheBall()."<br>";
            echo $myDog->eating("male")."<br>";
            echo $myDog->breastfeed()."<br>";
            
            $myDog2 = new Dog();
            echo $myDog2->bark();
        ?>
        <h3>Cat</h3>
        <?php
            $garfield = new Cat("male", 2, "siames", 3);
            $tom = new Cat("male", $ag, "pisupis", $kg);
            $lisa = new Cat("female", 1, "undefined", 4);
            $garfield->eating("")."<br>";
            $lisa->sleep()."<br>";
            $lisa->screem()."<br>";
            $garfield->purr()."<br>";
            $lisa->hanting()."<br>";
            $garfield->hanting()."<br>";

            echo "<br>";
            
            echo '$lisa: ' . $lisa."<br>";
            echo '$garfield'.$garfield."<br>";
            
            $lisa->breastfeed()."<br>";
            $lisa->takeCare()."<br>";
            
            echo "Sexo de Lisa:" .$lisa->getAge()."<br>";
            echo "Sexo de Garfield: " . $garfield->getSex()."<br>";
            
            echo $myDog2;
            
        ?>
    </body>
</html>
