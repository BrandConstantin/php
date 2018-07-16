<?php
$palo = array ('oro', 'copa', 'basto', 'espada');
$figura = array ('As', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Ocho',
                'Nueve', 'Sota', 'Caballo', 'Rey');
$puntos = array ('As' => 11, 'Dos' => 0, 'Tres' => 10, 'Cuatro' => 0, 'Cinco' => 0,
                'Seis' => 0, 'Siete' => 0, 'Ocho' => 0, 'Nueve' => 0, 'Sota' => 2, 'Caballo' => 3, 'Rey' => 4);

$contadorCartas = 0;
$contador = 0;
$puntosTotales = 0;
$randomPalo2 = "";
$randomFigura2 = "";
$cartasEchadas = "";
$i;

do{
    /* ME SACA EL PALO O LA FIGURA IGUAL */
    do{        
        $randomPalo = $palo[rand (0, 3)];// aleatoria sale el palo
        $randomFigura = $figura[rand (0, 11)];//saca figura aleatoria        
    }while($randomPalo != $randomPalo2 && $randomFigura != $randomFigura2 && $contador != 0);
    
    $randomPalo2 = $randomPalo;
    $randomFigura2 = $randomFigura;
    $contador++;
    /* ********************************** */
    
    $puntosCartas = $puntos[$randomFigura];//me saca los puntos segun la figura
    $carta = "$randomFigura de $randomPalo"; //string con el nombre y palo de la carta
    
    /*Comprobamos que no se repitan las cartas*/
    if (!in_array($carta, $cartasEchadas)){//comprueba que la carta no se repita  
        $cartasEchadas[] = $carta; // la meto en un array en el q compruebo que no saco la misma carta
        echo "<div>$carta - $puntosCartas puntos<br></div>";//muestro la carta no repetida
        $puntosTotales += $puntosCartas; // suma puntos carta
        
        $contadorCartas++;//contador para que llegue a 5 cartas
    }
    /* ************************************** */
    
}while($contadorCartas < 5);
echo "<div>TOTAL: $puntosTotales</div>";