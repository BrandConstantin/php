<?php

for ($index = 0; $index <= 30; $index++) {
    $num = $index * $index;
    echo $num." || ";
}

/////////////////////////
echo "<br/>";
$num = 0;
$contador = 0;

while ($contador <= 30){
    $num = $contador * $contador;    
    echo $num." || ";
    $contador += 1;
}

/////////////////////////////
echo "<br/>";

$num = 0;
$contador = 0;

do{
    $num = $contador * $contador;
    echo $num." || ";
    $contador++;
}while($contador <= 30);