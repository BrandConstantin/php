<?php
/*
$db_host = "localhost";
$dbname = "gestisimal";
$dbuser = "root";
$dbpass = "";

try {
    $db = new PDO(
        "mysql:host=$db_host;dbname=$db_name;",
        $db_user,
        $db_pass
    );
    
    $db->query("SET NAMES 'utf8'");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "No se ha podido establecer conexión con el servidor de BD";
    die("Error: ".$ex->getMessage());
}*/

abstract class Conexion_BD {
    private static $server = 'localhost';
    private static $db = 'gestisimal';
    private static $user = 'root';
    private static $password = '';

    public static function connectDB() {
        try {
            $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db.";charset=utf\
            8", self::$user, self::$password);
        } catch (PDOException $e) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $e->getMessage());
        }
        return $connection;
    }
}