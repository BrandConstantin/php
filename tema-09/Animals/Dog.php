<?php

include_once 'Mammal.php';

class Dog extends Mammal{
    public function __construct($sx, $ag, $rz) {
        parent::__construct($sx, $ag, $rz);
        
        if(isset($rz)){
            $this->raze = $rz;
        }else{
            $this->raze = "doberman";
        }
    }
    
    public function __toString() {
        return parent::__toString()."<br>Raze: $this->raze";
    }
    
    public function bark(){
        return "Ham Ham";
    }
    
    public function giveMe5(){
        return "Gime me 5!";
    }
    
    public function trowTheBall(){
        return "Plese trow the ball";
    }
}
