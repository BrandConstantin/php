<?php

function factorial($num){
    $result = 1;
    
    for ($i = $num; $i > 0; $i--) {
        $result *= $i;
    }
    
    return $result;
}

$dato = 3;
echo "<br/>Factorial de ".$dato." es ". factorial($dato);

$dato = 12;
echo "<br/>Factorial de ".$dato." es ". factorial($dato);

$dato = 7;
echo "<br/>Factorial de ".$dato." es ". factorial($dato);