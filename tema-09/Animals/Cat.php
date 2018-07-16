<?php

include_once 'Mammal.php';

class Cat extends Mammal{
    //atributos
    private $raze;
    private $kg;
    
    //métodos
    public function __construct($sx, $ag, $rz, $kg) {
        parent::__construct($sx, $ag, $rz, $kg);
        
        if(isset($rz)){
            $this->raze = $rz;
        }else{
            $this->raze = "siames";
        }
        
        if(!isset($kg)){
            $this->kg = 3;
        }else{
            $this->kg = $kg;
        }
    }
    
    public function __toString() {
        return parent::__toString()."<br>Raze: $this->raze";
        return parent::__toString()."<br>Kg: $this->kg";
    }

    /*public function getSex(){
        return $this->sex;
    }*/
    
    public function screem(){
        echo "miau<br>";
    }
    
    public function purr(){
        echo "mrrrr<br>";
    }
    
    public function eating($eat){
        if($eat == "fish"){
            echo "I like the fish<br>";
        }else{
            echo "I don't like this<br>";
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
    
    public function hanting(){
        return "I see a mouse, wait a minute....";
    }
}
