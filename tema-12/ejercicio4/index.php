<?php
/* 
 * La llamada a esta página ha de ser de tipo (Url)?cantidad=7.
 */
    $palos = ['Espadas', 'Basto', 'Oro', 'Copa'];
    $numeros = ['As','2','3','4','5','6','7','8','9','Sota','Caballo','Rey'];
    $numCartas = $_GET['cantidad'];
    $baraja = [];
    
    if(($numCartas<=48)&&($numCartas>0)){
        while($numCartas>0){
            $randomPalo = $palos[rand(0,3)];
            $randomNum = $numeros[rand(0,11)];
            
            $carta = [
              'numero' => $randomNum,
              'palo' => $randomPalo
            ];
            
            if(!in_array($carta, $baraja)){
                $baraja[] = $carta;
                $numCartas--;
            }
        }
        echo json_encode($baraja);
    } else {
        echo "Cantidad de cartas incorrecta.";
    }