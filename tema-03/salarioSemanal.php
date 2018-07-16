<!DOCTYPE html>
<!--
Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora.
-->
<html>
    <head>
        <title>Salario Semanal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Salario Semanal</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $horas = $_POST["horas"];
            $sueldo;
            
            if($horas <= 40){
                $sueldo = $horas * 12;
                echo 'Tu sueldo es de ', $sueldo, ' €';
            }
            
            if($horas > 40){
                $horasExtras = $horas - 40;
                $horas = 40;
                
                $sueldo = ($horasExtras * 16) + ($horas * 12);
                echo 'Tu sueldo es de ', $sueldo, ' €';
            }
        ?>
        </div>
    </body>
</html>
