<?php

class User3{
    public $userName;
    public static $minPassLength = 5;
    
    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }else {
        return false;
        }
    }
}

$pass = 'password'; //es valido
//$pass = 'pass'; /*no es valido*/

if(User3::validatePass($pass)){
    echo 'Pass is valid<br>';
}else{
    echo 'Pass is not valid<br>';
}

//acceder a una propriedad de fuera
echo User3::$minPassLength;