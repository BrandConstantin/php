<?php

function tabla($numero){
    $tabla = "";
    for ($index = 0; $index <= 10; $index++) {
        $cuenta = $index * $numero;
        $tabla .= "$index x $numero = $cuenta<br/>";
    }
    
    return $tabla;
}

echo "Tabla de multiplicar:<br/>";
//$num = 4;

for ($index = 0; $index <= 10; $index++) {
    echo "<br/>Tabla de {$index} <br/>";
    echo tabla($index);
}
