<?php
    if(isset($_COOKIE['nombre'])){
        echo "La cookie tiene el valor ".$_COOKIE['nombre'];
    }else{
        echo "No se ha encontrado ninguna cookie";
    }