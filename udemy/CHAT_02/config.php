<?php

$dbhost = "localhost";
$dbname = "chat_01";
$dbuser = "root";
$dbpass = "";

try {
    $db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
} catch (PDOException $e) {
    echo $e->getMessage();
}