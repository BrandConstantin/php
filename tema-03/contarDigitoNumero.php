<?php
    $numero = $_POST["numero"];
    
    if($numero < 0){
        $numero = -$numero;
    }
    
    if($numero < 10){
        echo "El número tiene 1 digito";
    } else if (($numero >= 10) && ($numero < 100)){
        echo "El número tiene 2 digitos";
    } else if (($numero > 100) && ($numero < 1000)){
        echo "El número tiene 3 digitos";
    } else if (($numero > 1000) && ($numero < 10000)){
        echo "El número tiene 4 digitos";
    } else if (($numero > 10000) && ($numero < 100000)){
        echo "El número tiene 5 digitos";
    } else {
        echo "Error: No se permiten mas de 5 digitos!";
    }
?>