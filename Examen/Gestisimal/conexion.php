<?php
$server = 'localhost';
$db = 'gestisimal';
$user = 'root';
$password = '';


try {
    $connection = new PDO("mysql:host=$server;dbname=$db;charset=utf8", "$user", "$pass");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die ("Error: " . $e->getMessage());
}

return $connection;