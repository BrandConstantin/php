<?php

for ($index = 0; $index <= 30; $index++) {
    $num = $index * $index;

    if ($num % 2 != 0) {
        echo $num . " impar<br/> ";
    } else {
        echo $num . " PAR<br/> ";
    }
}

///////////////////////////
echo "<br/>";
$num = 0;
$contador = 0;

while ($contador <= 30) {
    $num = $contador * $contador;
    if ($num % 2 == 0) {
        echo $num . " PAR<br/> ";
    } else {
        echo $num . " impar<br/> ";
    }
    $contador += 1;
}

///////////////////////////////
//echo "<br/>";
//
//$num = 0;
//$contador = 0;
//
//do{
//    $num = $contador * $contador;
//    echo $num." || ";
//    $contador++;
//}while($contador <= 30);