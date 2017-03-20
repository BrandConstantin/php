<?php

$cadena = 'BrandConstantin';

//saca el número total de carácteres
echo strlen($cadena)."<br>";
//reemplaza la cadena Brand con un espacio en blanco
echo str_replace('Brand', ' ', $cadena)."<br>";
//transforma la cadena en minuscula y luego en mayuscula
echo strtolower($cadena)."<br>";
echo strtoupper($cadena)."<br>";
//saca los carácters desde 0 a 5, y desde 5 a 15
echo substr($cadena, 0, 5)."<br>";
echo substr($cadena, 5, 15)."<br>";