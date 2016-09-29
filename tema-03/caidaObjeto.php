<?php
    $g = 9.81;
    $altura = $_POST["altura"];
    
    $tiempo = round((sqrt((2 * $altura) / $g)), 3);
    
    echo '<h1>El tiempo de caida es de ', $tiempo, ' segundos';
?>