<?php

$persona = array ("Pedro", "Pérez", "29", "Madrid", "dkfj4");

setcookie("miCookie[nombre]", $persona[0], time() * 3600);
setcookie("miCookie[apellido]", $persona[1], time() * 3600);
setcookie("miCookie[edad]", $persona[2], time() *  3600);
setcookie("miCookie[ciudad]", $persona[3], time() *  3600);
setcookie("miCookie[password]", $persona[4], time() *  3600);

echo "El nombre es: ".$_COOKIE['miCookie']['nombre']."<br>";
echo "Y su contraseña es: ".$_COOKIE['miCookie']['password']."<br>";