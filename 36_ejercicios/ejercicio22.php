<?php

function tabla($numero, $html = NULL) {
    $tabla = "";

    if ($html != NULL) {
        $tabla .= "Tabla de multiplicar del {$numero}:<br/>";
    }

    for ($index = 0; $index <= 10; $index++) {
        $cuenta = $index * $numero;
        $tabla .= "$index x $numero = $cuenta<br/>";
    }


    if ($html != NULL) {
        echo $tabla;
    }

    return $tabla;
}

for ($index = 0; $index <= 10; $index++) {
    tabla($index, TRUE);
}
