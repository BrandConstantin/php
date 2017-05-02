<?php

class User{
    public function __construct() {
        echo "Constructor llamado<br>";
    }
    
    public function register(){
        echo "Usuario registrado<br>";
    }
    
    public function login($userName, $pass){
        $this->auth_user($userName, $pass);
    }
    
    public function auth_user($userName, $pass){
        echo $userName.' esta autentificado!<br>';
    }
    
    public function __destruct() {
        echo 'Destructor llamado<br>';
    }
}    

    $User = new User();
    
    $User->register();
    
    $User->login('Brand', '1235');
