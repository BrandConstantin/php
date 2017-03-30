<!DOCTYPE html>
<!--
En ajedrez, el valor de las piezas se mide en peones según la siguiente tabla:
Pieza Dama Torre Alfil Caballo Peón
Valor 9 peones 5 peones 3 peones 2 peones 1 peón
Realiza un programa que vaya generando al azar las piezas que capturan dos jugadores durante una
partida. Un jugador se rinde cuando el contrario captura el equivalente a 9 peones (o más).
Ejemplo:
Fichas capturadas:
Alfil negro (3 peones)
Caballo blanco (2 peones)
Peón blanco (1 peones)
Torre negro (5 peones)
Alfil negro (3 peones)
Las negras se rinden, han perdido el equivalente a 11 peones.
Hay que tener en cuenta que cada jugador tiene la posibilidad de capturar algunas de las siguientes
piezas (no más): 1 dama, 2 torres, 2 alfiles, 2 caballos y 8 peones.
El valor de cada pieza se debe almacenar en un array asociativo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>El Ajedrez</title>
    </head>
    <body>
        <?php
            $color = array("blanco", "negro");
            $valor = array("dama" => 9, "torre" => 5, "alfil" => 3, "caballo" => 2, "peon" => 1);
            $pieza = array("dama","torre","alfil","caballo","peon");
            
            $i = 0;
            $turnos;
            $turnoJugB = true;
            $turnoJugN = true;
            
            //random turno jugador
            $turnos = rand(0, 1);
            
            if($turnos == 0){
                $juegosB;
                $puntosB = 0;
                
                $turnoJugB = true;
                $turnoJugN = FALSE;                
                
                //escoge las piezas
                for($i = 0; $i < 5; $i++){
                    //elige la pieza
                    $randomPieza = rand(0, 4);
                    $piezesita = $pieza[$randomPieza];


                    //generar el juego
                    $juegoB = $piezesita." ".$colorin;
                    $juegosB[$i] = $juegoB;
                    $i++;

                    if(!in_array($juegoB, $juegosB)){
                        $juegosB[$i] = $juegoB;
                        $i++;
                    }
                }
            
                $puntosB = $puntosB + $puntosB[$valor];
                echo "$juegoB<br>";
                echo "Total: $puntosB"; 
            }else{
                echo 'Turno negro';
            }                     
        ?>
    </body>
</html>