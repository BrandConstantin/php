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
            include_once 'Animal.php';
            include_once 'Canary.php';
            include_once 'Cat.php';
            include_once 'Pinguin.php';
            include_once 'Lizard.php';
            include_once 'Dog.php';
            
            $garfield = new Cat("male", $r, 3);
            $tom = new Cat("male", "pisupis", $a);
            $lisa = new Cat("female", $r, $a);
            $silver = new Cat();
            
            $myCanary = new Bird($s, $a);
            echo $myCanary->clean()."<br>";
            echo $myCanary->sing()."<br>";
            
            $myPingu = new Pinguin("female");
            echo $myPingu->clean()."<br>";
            echo $myPingu->fly()."<br>";
            echo $myPingu->swim()."<br>";
            
            $myDog = new Dog("male", 4, "pastor aleman");
            echo $myDog->bark()."<br>";
            echo $myDog->giveMe5()."<br>";
            echo $myDog->trowTheBall()."<br>";
            
            $lizardog = new Lizard();
            echo $lizardog->takeSun()."<br>";
            echo $lizardog->hide()."<br>";
        ?>
    </body>
</html>
