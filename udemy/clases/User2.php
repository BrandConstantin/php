<?php

class User2{
    public $id;
    public $userName;
    public $email;
    public $pass;
    
    public function __construct($userName, $pass) {
        echo "Constructor llamado<br>"; 
        $this->userName = $userName;
        $this->pass = $pass;
    }
    
    public function register(){
        echo "Usuario registrado<br>";
    }
    
    public function login(){
        $this->auth_user();
    }
    
    public function auth_user($userName, $pass){
        echo $this->userName;
    }
    
    public function __destruct() {
        echo 'Destructor llamado<br>';
    }
}    

    $User = new User2('Brand', '1235');
    echo $User->userName .' esta autentificado!<br>';
    echo $User->pass .' es la contraseña!<br>';