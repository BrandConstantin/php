<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogBD
 *
 * @author costy
 */
class BlogBD {
    private static $server = 'localhost';
    private static $db = 'blogDB';
    private static $user = 'root';
    private static $password = 'Sjzm0080';
    
    public static function connectDB() {
        try {
          $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db.";charset=utf8", self::$user, self::$password);
        } catch (PDOException $e) {
          echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
          die ("Error: " . $e->getMessage());
        } 
        return $connection;
  }
}
