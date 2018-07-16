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
            error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
            
            include_once './Canario.php';
            include_once './Caracol.php';
            include_once './Pinguino.php';
            include_once './Perro.php';
            include_once './Gato.php';
        ?>
        <h4>PAJAROS</h4>
        <?php
            $canario1 = new Canario("hembra", 3, 0.075, "blanco");
            //come bebe duerme son de la clase animales
            echo $canario1->come("pipas")."<br>";
            echo $canario1->duerme()."<br>";
            echo $canario1->bebe()."<br>";
            //se limpia, vuela y pone huevos son de la clase pajaros
            echo $canario1->seLimpia()."<br>";
            echo $canario1->vuela()."<br>";
            echo $canario1->poneHuevos()."<br>";
            echo $canario1->canta()."<br>";
            
            echo "<br>Canario 1: $canario1";
            echo "<br>............................";
            echo "<br><br>";
            
            $canario2 = new Canario("macho", 3, 0.065, "");
            //come bebe duerme son de la clase animales
            echo $canario2->come("pipas")."<br>";
            echo $canario2->duerme()."<br>";
            //se limpia, vuela y pone huevos son de la clase pajaros
            echo $canario2->seLimpia()."<br>";
            echo $canario2->vuela()."<br>";
            echo $canario2->poneHuevos()."<br>";
            echo $canario2->bebe()."<br>";
            echo $canario2->canta()."<br><br>";
            
            echo "Canario 2: $canario2";
            echo "<br>............................";
            echo "<br><br>";     
            
            $pinguino = new Pinguino("", 6, 0.8);
            //come bebe duerme son de la clase animales
            echo $pinguino->come("pescaito")."<br>";
            echo $pinguino->duerme()."<br>";
            echo $pinguino->bebe()."<br>";
            //se limpia, vuela y pone huevos son de la clase pajaros
            echo $pinguino->seLimpia()."<br>";
            echo $pinguino->seLimpiaPinguino()."<br>";//se limpia pinguino y vuela pinguino son de la clase pinguino
            echo $pinguino->vuela()."<br>";
            echo $pinguino->vuelaPinguino()."<br>";//se limpia pinguino y vuela pinguino son de la clase pinguino
            echo $pinguino->poneHuevos()."<br>";
            echo $pinguino->nada()."<br><br>";
            
            echo "Pinguino: $pinguino";
            echo "<br>............................";
            echo "<br><br>";     
        ?>        
        <h4>CARACOLES</h4>
        <?php
            $caracol1 = new Caracol("macho", 0.1, 0.002, "");
            //come bebe duerme son de la clase animales
            echo $caracol1->come("lechuga")."<br>";
            echo $caracol1->duerme()."<br>";
            echo $caracol1->bebe()."<br>";
            echo $caracol1->tomaSol()."<br>";
            echo $caracol1->esconde()."<br><br>";
            
            echo "Caracol: ".$caracol1;
        ?>
        <h4>MAMIFEROS</h4>
        <?php
            $perro1 = new Perro("", 4, 14, "");
            //come bebe duerme son de la clase animales
            echo $perro1->come("carne")."<br>";
            echo $perro1->duerme()."<br>";
            echo $perro1->bebe()."<br>";
            echo $perro1->tiraPelota()."<br>";
            echo $perro1->ladra()."<br>";
            echo $perro1->amamanta()."<br><br>";
            
            echo "Perro 1: ".$perro1;
            echo "<br>............................";
            echo "<br><br>";   
           
            /*$perro2 = new Perro();
            echo "Perro 2: ".$perro2;
            echo "<br>............................";
            echo "<br><br>";   */
            
            $gato1 = new Gato("hembra", 2, 4, "siames", "negro");
            //come bebe duerme son de la clase animales
            echo $gato1->come("pescado")."<br>";
            echo $gato1->duerme()."<br>";
            echo $gato1->bebe()."<br>";
            echo $gato1->amamanta()."<br>";
            echo $gato1->maulla()."<br><br>";
            
            echo "Gato 1: ".$gato1;
            echo "<br>............................";
            echo "<br><br>";
            
            $gato2 = new Gato("hembra", 2, 4, " ", "blanco");
            //come bebe duerme son de la clase animales
            echo $gato1->come("otra cosa")."<br><br>";
            
            echo "Gato 2: ".$gato2;
            echo "<br>............................";
            echo "<br><br>";
            
            $gato3 = new Gato("macho", 1, 1, "", "");
            echo "Gato 3: ".$gato3;
            
            echo "<br><br><br>";
            echo $gato1->sePelea($gato2);
            echo "<br>";
            echo $gato1->sePelea($gato3);
            echo "<br>";
            echo $gato3->sePelea($gato3);
        ?>
    </body>
</html>