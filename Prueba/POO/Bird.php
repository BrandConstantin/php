<?php

include_once 'Animal.php';

class Bird extends Animal{
    public function __construct($s) {
        parent::__construct($s);
    }
    
    public function clean(){
        return "I clean up my wings".parent::clean();
    }
    
    public function fly(){
        return "I will fly!";
    }
}