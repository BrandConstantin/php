<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funciones</title>
    </head>
    <body>
        <?php
            function  fun(){
                $var = 'saludos';
                
                return $var;
            }
            
            echo fun()."<br>";
            
            $var1 = 100;
            function sum($var1, $var2){
                $suma = $var1 + $var2;
                
                return $suma;
            }
            
            echo sum($var1, 20);
        ?>
    </body>
</html>
