<?php

$provincia = $_GET['provincia'];
$request = "http://api.openweathermap.org/data/2.5/weather?q=".$provincia.",\Spain&units=metric&appid=fefbdfd80d5ff72dea95969c1db09f9c";
$datos = file_get_contents($request);
$tiempo = json_decode($datos);

echo "El tiempo en ".$provincia.":<br>";
echo "Temperatura: ".$tiempo->{"main"}->{"temp"}."ºC<br>";
echo  "Humedad: ".$tiempo->{"main"}->{"humidity"}."%<br>";
echo "Presion: ".$tiempo->{"main"}->{"pressure"}."mb<br>";
?>

<a href="index.php"></a>