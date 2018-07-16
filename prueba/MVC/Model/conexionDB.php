<?php

abstract class conexionDB{
    private static $server = "localhost";
    private static $db = "Pizzeria";
    private static $user = "root";
    private static $password = "Sjzm0080";
    
    public static function connectDB(){
        try{
            $connection = new PDO("mysql_host=".self::$server.";dbname=".self::$db.";charset=utf8", self::$user, self::$password);
        } catch (PDOException $e) {
            echo 'No se ha podido establecer conexión con el servidor de base de datos.<br>';
            die("Error: ".$e->getMessage());
        }
        
        return $connection;
    }
}
