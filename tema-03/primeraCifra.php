<?php
    $numero = $_POST["numero"];
    $cifraInvertida;
    
    if(($numero >= 0) && ($numero < 10)){
        $cifraInvertida = $numero;
        $cifra = $cifraInvertida % 10;
        echo "La primera cifra introducida ha sido: ", $cifra;
    } else if (($numero >= 10) && ($numero < 100)){
        $cifraInvertida = $numero / 10;
        $cifra = $cifraInvertida % 10;
        echo "La primera cifra introducida ha sido: ", $cifra;
    } else if (($numero >= 100) && ($numero < 1000)){
        $cifraInvertida = $numero / 100;
        $cifra = $cifraInvertida % 10;
        echo "La primera cifra introducida ha sido: ", $cifra;
    } else if (($numero >= 1000) && ($numero < 10000)){
        $cifraInvertida = $numero / 1000;
        $cifra = $cifraInvertida % 10;
        echo "La primera cifra introducida ha sido: ", $cifra;
    } else if (($numero >= 10000) && ($numero < 100000)){
        $cifraInvertida = $numero / 10000;
        $cifra = $cifraInvertida % 10;
        echo "La primera cifra introducida ha sido: ", $cifra;
    } else {
        echo "Error: No se permiten mas de 5 $cifras!";
    }
?>