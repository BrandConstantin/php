<?php

$num = 1;

for ($index = 2; $index <= 20; $index++) {
    $num *= $index;

    echo $num . " || ";
}

///////////////////////////
echo "<br/>";
$num = 1;
$contador = 2;

while ($contador <= 20) {
    $num *= $contador;

    echo $num . " || ";

    $contador += 1;
}

///////////////////////////////
echo "<br/>";

$num = 1;
$contador = 2;

do {
    $num  *= $contador;
    echo $num . " || ";
    $contador++;
} while ($contador <= 20);
