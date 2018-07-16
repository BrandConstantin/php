<?php
    $dia = $_POST["dia"];
    
    switch($dia){
        case 1: echo 'LUNES';
            break;
        case 2: echo 'MARTES';
            break;
        case 3: echo 'MIERCOLES';
            break;
        case 4: echo 'JUEVES';
            break;
        case 5: echo 'VIERNES';
            break;
        case 6: echo 'SABADO';
            break;
        case 7: echo 'DOMINGO';
            break;
        default : echo 'Dia inexistente';
    }
?>

