<?php

//comprueba si se establece conexion con mysql
try {
  $conection = new PDO("mysql:host=localhost;dbname=crowded;charset=utf8", "root", "Sjzm0080");
} catch (PDOException $e) {
  echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
  die ("Error: " . $e->getMessage());
}