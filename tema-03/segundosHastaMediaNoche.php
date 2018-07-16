<?php
    $hora = $_POST["hora"];
    $minutos = $_POST["minutos"];
    
    if(($hora < 1 || $hora > 24) || ($minutos < 1 || $minutos > 60)){
        echo 'Hora o minutos incorrectos!<br>';
    }else{
        $minutosRestante = 60 - $minutos;
        $minutosTotales = ((24 - $hora) * 60) + $minutosRestantes;
        $segundos = $minutosTotales * 60;
        
        echo 'Hasta media noche quedan un total de ', $segundos, ' segundos';
    }
?>