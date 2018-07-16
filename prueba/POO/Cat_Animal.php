<?php

include_once 'Animal.php';

class Cat_Animal extends Animal{
    private $rese;
    
    public function __construct($s, $r) {
        parent::__construct($s);
        
        if(issset($r)){
            $this->rase = $r;
        }else{
            $this->rase = "siames";
        }
    }
    
    public function __toString() {
        return parent::__toString()."<br>Raza: $this->rase";
    }
    
    public function screem(){
        return "miauuu";
    }
    
    public function purr(){
        return "mrrrrr";
    }
    
    public function eating($eat){
        if($eat == "fish"){
            return "Hmmm que bueno <br>";
        }else{
            return "No me gusta eso";
        }
    }
    
    public function fightWith($opponent){
        if(($this->getSex()) == "female"){
            echo "I don't fight<br>";
        }else if(($opponent->getSex()) == "female"){
            echo "I don't fight with female<br>";
        }else{
            echo "I will kill you<br>";
        }
    }
}