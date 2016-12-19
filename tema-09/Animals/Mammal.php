<?php

include_once 'Animal.php';

class Mammal extends Animal{
    public function __construct($sx, $ag) {
        parent::__construct($sx, $ag);
    }
    
    public function breastfeed(){
        if(($this->getSex() == "male")){
            return "I'm a male, can't breastfeed";
        }else{
            if($this->getAge() <= 1){
                return "I'm a very young famale to breastfeed!";
            }else{
                return "Take the boobs....";
            }
        }
    }
    
    public function takeCare(){
        return "I take care all of my baby";
    }
}