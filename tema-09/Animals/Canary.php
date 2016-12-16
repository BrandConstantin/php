<?php

include_once 'Bird.php';

class Canary extends Bird{
    private $color;
    
    public function __construct($s, $a, $c) {
        parent::__construct($s, $a, $c);
        
        if(isset($c)){
            $this->color = $c;
        }else{
            $this->color = "yellow";
        }
    }
    
    public function __toString() {
        return parent::__toString()."<br>Color: $this->color";
    }
    
    public function sing(){
        return "tri li liu tri";
    }
    
    public function clean() {
        parent::clean();
    }
}

