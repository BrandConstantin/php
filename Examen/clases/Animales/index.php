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
        <title>Animales</title>
    </head>
    <body>
        <?php
            include_once './Canario.php';
        ?>
        <h4>CANARIO</h4>
        <?php
            $canario1 = new Canario("hembra", 3, 0.075, "blanco");
            echo $canario1->come("pipas")."<br>";
            echo $canario1->duerme()."<br>";
            echo $canario1->seLimpia()."<br>";
            echo $canario1->vuela()."<br>";
            echo $canario1->poneHuevos()."<br>";
            echo $canario1->come("pipas")."<br>";
            echo $canario1->canta()."<br>";
            
            echo "<br>Canario 1: $canario1";
            echo "<br><br>";
            
            $canario2 = new Canario("hembra", 1, 0 , "gris");
            echo $canario1->come("pipas")."<br>";
            echo $canario1->duerme()."<br>";
            echo $canario1->seLimpia()."<br>";
            echo $canario1->vuela()."<br>";
            echo $canario1->poneHuevos()."<br>";
            echo $canario1->come("pipas")."<br>";
            echo $canario1->canta()."<br><br>";
            
            echo "Canario 2: $canario2";
        ?>        
        <h4>Caracol</h4>
    </body>
</html>