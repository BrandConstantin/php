<?php

class User{
    private $user_id;
    public $name;
    protected $pass;
    public $date_creation;

    public function __construct($name, $pass){
        echo 'constructor called<br/>';
        $this->username = $name;
        $this->password = $pass;
    }

    public function register(){
        echo 'User Registered';
    }

    public function login(){
        //echo $user_id.' is now logged in.';
        $this->auth_user();
    }

    public function auth_user(){
        echo $this->username.' is authenticated with pass '.$this->password.'<br/>';
        //echo $this->$user_id;
    }

    public function __destruct(){
        echo 'destructor called</br>';
    }
}

$user = new User('brand', 'ad42');
//$user->register();
$user->login();

echo $user->username.'<br/>';