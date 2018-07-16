<!DOCTYPE html>
<!--
3. En ajedrez, el valor de las piezas se mide en peones según la siguiente tabla:
Pieza   Dama     Torre    Alfil    Caballo   Peón
Valor 9 peones 5 peones 3 peones  2 peones  1 peón
Realiza un programa que vaya generando al azar las piezas que capturan dos jugadores durante una partida. Un
jugador se rinde cuando el contrario captura el equivalente a 9 peones (o más).
Ejemplo:
Fichas capturadas:
Alfil negro (3 peones)
Caballo blanco (2 peones)
Peón blanco (1 peones)
Torre negro (5 peones)
Las negras se rinden, han perdido el equivalente a 11 peones.
Hay que tener en cuenta que cada jugador tiene la posibilidad de capturar algunas de las siguientes piezas (no
más): 1 dama, 2 torres, 2 alfiles, 2 caballos y 8 peones.
El valor de cada pieza se debe almacenar en un array asociativo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>El ajedrez segunda versión</title>
    </head>
    <body>
        <?php
        
        $valor = ["dama" => 9, "torre" => 5, "alfil" => 3, "caballo" => 2, "peon" => 1];        
        $pieza = ["dama", "torre", "alfil", "caballo", "peon"];        
        $jugadorB = ["dama" => 1, "torre" => 2, "alfil" => 2, "caballo" => 2, "peon" => 8];
        $jugadorN = ["dama" => 1, "torre" => 2, "alfil" => 2, "caballo" => 2, "peon" => 8];
        
        
        $turnos = rand(0, 1);
        $salir = FALSE;
        $puntosJugB = 0;
        $puntosJugN = 0;
        
        while(!$salir){
            if($turnos % 2 == 0){
                $piezesita = $pieza[rand(0, 4)];
                
                if($jugadorB[$piezesita] > 0){
                    $puntosJugB += $valor[$piezesita];
                    $jugadorB[$piezesita]--;
                }else{
                    $turnos--;
                }
                
                echo "El jugador blanco ha sacado ".$piezesita." = ".$valor[$piezesita]." puntos<br>";
                //$turnos++;
            }else{
                $piezesita = $pieza[rand(0, 4)];
                
                if($jugadorN[$piezesita] > 0){
                    $puntosJugN += $valor[$piezesita];
                    $jugadorN[$piezesita]--;
                }else{
                    $turnos--;
                }
                
                echo "El jugador negro ha sacado ".$piezesita." = ".$valor[$piezesita]." puntos<br>";
                //$turnos++;
            }
            
            if($puntosJugB >= 9 || $puntosJugN >= 9){
                $salir = true;
            }
        }
                    
        if ($jugadorB >= 9) {
            echo '<br>El jugador negro se ha rendido, ha perdido ', $puntosJugB, ' peones';
        }else {
            echo '<br>El jugador blanco se ha rendido, ha perdido ', $puntosJugN, ' peones';
        }
        ?>
    </body>
</html> 