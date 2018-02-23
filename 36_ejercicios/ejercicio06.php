<?php

$num = 5;
$numeros = 0;
$resultado = 0;

echo "TABLA MULTIPLICAR DEL ".$num."<br/>";
while ($numeros <= 10){
    $resultado = $numeros * $num;
    echo $numeros." x ".$num." = ".$resultado."<br/>";
    $numeros++;
}

///////////////////////////////
echo "<br/>";

$num = 6;
$numeros = 0;
$resultado = 0;

echo "TABLA MULTIPLICAR DEL ".$num."<br/>";
do {
    $resultado = $numeros * $num;
    echo $numeros." x ".$num." = ".$resultado."<br/>";
    $numeros++;
} while ($numeros <= 10);