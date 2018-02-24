<?php

$sting = "texto";
$array = [1, "hola", 2.4];
$bool = TRUE;

if(is_array($array) == TRUE){
    echo " es un array<br/>";
}

if(is_bool($bool)){
    echo " es un booleano<br/>";
}

if(is_string($sting)){
    echo " es un string";
}