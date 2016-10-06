<?php
    $numero = $_POST["numero"];
    $capicua = false;
    
    if($numero < 0){
        $capicua = false;
    }
    
    if($numero < 10){
        $capicua = true;
        echo "Número capicua!";    
    } else if (($numero >= 10) && ($numero < 100)){
        if(floor($numero / 10) == ($numero % 10)){
            $capicua = true;
            echo 'Número capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else if (($numero > 100) && ($numero < 1000)){
        if(floor($numero / 100) == ($numero % 10)){
            $capicua = true;
            echo 'Número capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else if (($numero >= 1000) && ($numero < 10000)){
        if ((floor($numero / 1000) == ($numero % 10)) && 
           ((floor($numero / 100) % 10) == (floor($numero / 10) % 10))){
          $capicua = true;
          echo 'Numero capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else if (($numero >= 10000) && ($numero < 100000)){
        if ((floor($numero / 10000) == ($numero % 10)) &&
           (((floor($numero / 1000) % 10)) == (floor( $numero / 10) % 10))){
          $capicua = true;
          echo 'Número capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else {
        echo "Error: No se permiten mas de 5 digitos!";
    }
?>