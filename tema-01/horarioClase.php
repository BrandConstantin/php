<!DOCTYPE html>
<!--
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //horario clase
            $eie = "EIE";
            $hlc = "HLC";
            $int = "INT";
            $dwes = "DWES";
            $dwec = "DWEC";
            $daw = "DAW";

        ?>    
            
        <table style="border: red dotted 3px; margin-left: 40%; word-spacing: 20px;">
            <?php
                echo "<tr><td> Lunes </td><td> Martes </td><td> Miercoles </td><td> Jueves </td><td> Viernes </td></tr>";
                echo "<tr><td> $eie </td><td> $int </td><td> $dwec </td><td> $dwes </td><td> $dwes </td></tr>";
                echo "<tr><td> $eie </td><td> $int </td><td> $dwec </td><td> $dwes </td><td> $dwes </td></tr>";
                echo "<tr><td> $eie </td><td> $int </td><td> $dwec </td><td> $dwes </td><td> $dwes </td></tr>";
                echo "<tr><td> $hlc </td><td> $dwes </td><td> $int </td><td> $daw </td><td> $dwec </td></tr>";
                echo "<tr><td> $hlc </td><td> $dwes </td><td> $int </td><td> $daw </td><td> $dwec </td></tr>";
                echo "<tr><td> $hlc </td><td> $eie </td><td> $int </td><td> $daw </td><td> $dwec </td></tr>";
            ?>
        </table>
        
    </body>
</html>
