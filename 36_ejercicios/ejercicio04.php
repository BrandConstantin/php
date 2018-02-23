<?php

$num = 0;

for ($index = 0; $index <= 20; $index++) {
    $num = $index * 2;

    echo $num . " || ";
}

///////////////////////////
echo "<br/>";
$num = 0;
$contador = 0;

while ($contador <= 20) {
    $num = $contador * 2;

    echo $num . " || ";

    $contador += 1;
}

///////////////////////////////
echo "<br/>";

$num = 0;
$contador = 0;

do {
    $num = $contador * 2;
    echo $num . " || ";
    $contador++;
} while ($contador <= 20);
