<?php

include_once 'Animal.php';

class Bird extends Animal{
    public function __construct($sx, $ag) {
        parent::__construct($sx, $ag);
    }
    
    public function clean(){
        return "I'm clean up my wings";
    }
    
    public function fly(){
        return "I'm flying, I'm flying!";
    }
    
    public function layEggs(){
        if(($this->getSex() == "male")){
            return "I'm a male, can't lay eggs";
        }else{
            if($this->getAge() <= 1){
                return "I'm a very young famale, I can't!";
            }else{
                return "Give mi time....";
            }
        }
    }
}