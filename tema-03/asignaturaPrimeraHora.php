<!DOCTYPE html>
<!--
Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.
-->
<html>
    <head>
        <title>Asignatura Primera Hora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Averigua la asignatura de la primera hora de cada dia</h1>
        <?php
            $diaSemana = $_POST["diaSemana"];
            $diaMinuscula = strtolower($diaSemana);
            
            switch ($diaMinuscula){
                case 'lunes': echo 'EIE'; 
                    break;
                case 'martes': echo 'INT';
                    break;
                case 'miercoles': echo 'DWEC';
                    break;
                case 'jueves': 
                case 'viernes': echo 'DWES';
                    break;
                default : echo 'Has introducido un dia inexistente';
            }
        ?>
        </div>
    </body>
</html>
