<!DOCTYPE html>
<!--
Escribe un programa que genere una secuencia de 5 cartas de la baraja española. Se tienen que cumplir
las siguientes condiciones:
a) No se puede repetir ninguna carta.
b) O bien el número o bien el palo de la carta que se muestra debe coincidir con el de la anterior (salvo
lógicamente la primera carta que se echa).
c) Al final se muestran los puntos que suman las cartas echadas según el juego de la brisca. El as vale 11
puntos, el 3 vale 10, la sota vale 2, el caballo vale 3, el rey vale 4 y el resto de cartas no vale nada. Es
obligatorio que la información sobre los puntos de cada carta se guarde en un array asociativo.
Ejemplo:
As de oros
5 de oros
5 de espadas
sota de espadas
Rey de espadas
17 puntos
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Baraja Española</title>
    </head>
    <body>
    <?php
        $brisca = array("as" => 11, "2" => 0, "3" => 10, "4" => 0, "5" => 0, 
            "6" => 0, "7" => 0, "8" => 0, "9" => 0, "sota" => 2, "caballo" => 3, "rey" => 4);
        $palos = array(1=>"copa", 2=>"espada", 3=>"basto", 4=>"oro");
        $numeros = array(1=>"as", 2=>"2", 3=>"3", 4=>"4", 5=>"5", 6=>"6", 7=>"7", 
            8=>"8", 9=>"9", 10=>"sota", 11=>"caballo", 12=>"rey");
        
        $cartas;
        $i = 0;
        $paloAnte;
        $numAnte;
        $total = 0;
        
        //echo $carta;
        for ($i = 0; $i < 5; $i++) {
            //crear la primera carta
        
            //elegir el palo
            $randomPalo = rand(1, 4);
            $pal = $palos[$randomPalo];

            //elegir el número
            $randomNum = rand(1, 12);
            $num = $numeros[$randomNum];

            //formar la carta
            $carta = $num." ".$pal;            

            $cartas[$i] = $carta;                
            
            //añade las cartas en un array
            $cartas[$i] = $carta;
            
            if(!in_array($carta, $cartas)){
                $cartas[$i] = $carta;
                
                $repite = rand(0, 1);

                if($repite == 0){
                    $modifica = "numero";
                }else{
                    $modifica = "palo";
                }

                if($modifica == "palo"){
                        $randomPalo = rand(1, 4);
                        $pal = $palos[$randomPalo];
                }else{                
                        $randomNum = rand(1, 12);
                        $num = $numeros[$randomNum];
                }
            }
            
            echo "<h3>".$cartas[$i]."</h3>";
            
            //total brisca
            $total = $total + $brisca[$num];
        }
        
        echo '<br><br><br>TOTAL: '.$total;
    ?>
    </body>
</html>