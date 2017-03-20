<?php

$nombre = $_POST['nombre'];

//primer nombre es el nombre de la cookie
//el segundo el valor de la cookie
//el tiempo de caducación de la cookie
setcookie('nombre', $nombre, time() + 4800);

echo $nombre;