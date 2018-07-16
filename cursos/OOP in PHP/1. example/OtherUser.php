<?php 
//static property and methods

class OtherUser{
    public $username;

    public static $minPassLength = 5;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }else{
            return false;
        }
    }
}

$pass = 'pass';

if(OtherUser::validatePass($pass)){
    echo 'Pass is valid';
}else{
    echo 'Pass is not valid';
}

echo '<br/>'.OtherUser::$minPassLength;