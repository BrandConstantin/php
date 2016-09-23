<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Hola</h3>
            <?php 
                $numero = 20;
                $palabra = '40';
                $mezcla = $numero . $palabra;
                echo $mezcla;
                print_r(get_defined_vars());
            ?>
    </body>
</html>