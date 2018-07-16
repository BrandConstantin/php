<?php

echo "fecha del dia de hoy es ".date('d-m-Y')."<br>";
echo "el dia de hoy es ".date('d')."<br>";
echo "el mes actual es ".date('M')."<br>";
echo "el mes actual es ".date('F')."<br>";
echo "el número de la semana actual es ".date('W')."<br>";
//el número de dia empieza con lunes número    1
echo "el número de dia de hoy es ".date('w')."<br>";
echo "cuantos dias tiene el mes? ".date('t')."<br>";

//para definir una constante, una variable que no cambia su valor todo el programa
//se nombre el constante y luego su valor
define('constantePi', '3.14');
echo constantePi;