<?php

include_once 'Mammal.php';

class Dog extends Mammal{
    public function __construct($s, $a, $r) {
        parent::__construct($s, $a, $r);
        
        if(isset($r)){
            $this->raze = $r;
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
