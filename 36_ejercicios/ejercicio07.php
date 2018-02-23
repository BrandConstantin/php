<?php

$array = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

foreach ($array as $value) {
    echo $value." || ";
}

$contador = 0;
for ($index = 0; $index < count($array); $index++) {
    $contador++;
}
echo "<br/>Hay ".$contador." meses";