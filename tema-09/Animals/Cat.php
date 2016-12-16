<?php

include_once 'Animal.php';

class Cat extends Animal{
    //atributos
    private $color;
    private $raze;
    private $age;
    private $kg;
    private $sex;
    
    //métodos
    public function __construct($s, $r, $a) {
        parent::__construct($s, $r, $a);
        
        if(isset($r)){
            $this->raze = $r;
        }else{
            $this->raze = "siames";
        }
    }
    
    public function __toString() {
        return parent::__toString()."<br>Raze: $this->raze";
    }

    public function getSex(){
        return $this->sex;
    }
    
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
