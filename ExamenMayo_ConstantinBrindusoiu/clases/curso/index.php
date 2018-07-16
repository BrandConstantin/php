<!DOCTYPE html>
<!--
Implementa la clase Curso. Sobre cada curso se quiere saber su código, descripción y
número máximo de alumnos permitidos. Los cursos se ordenan por código. Cuando se crea
un curso, su estado inicial es “inactivo”. Es necesario saber el número total de cursos
creados y también el número total de cursos activo 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './Curso.php';
        
        $c1 = new Curso("HTM","HTML básico", 60);
        $c1->activa();
        $c2 = new Curso("ANG","Angular paso a paso", 30);
        $c3 = new Curso("DIS","Diseño web", 40);
        $c4 = new Curso("SQL","SQL avanzado", 25);
        $c5 = new Curso("GIT","Git para principiantes", 35);

        $c2->activa();
        $c4->activa();

        echo $c1;
        echo $c2;
        echo $c3;
        echo $c4;
        echo $c5;
        
        echo '<br><br>';
        echo "Cursos totales: ".Curso::getTotalCursos()."<br>";
        echo "Cursos activos: ".Curso::getCursosActivos()."<br>";
        ?>
    </body>
</html>