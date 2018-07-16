<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    
    $resultado = (0 - $b) / $a;
    
    echo '<h1>Según la fórmula "ax + b = 0" el resultado es ', $resultado;
?>