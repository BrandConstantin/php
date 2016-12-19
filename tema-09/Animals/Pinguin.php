<?php

include_once 'Bird.php';

class Pinguin extends Bird{
    public function __construct($sx, $ag) {
        parent::__construct($sx, $ag);
    }
    
    public function clean() {
        return parent::clean()."<br>The pinguin love clean up";
    }
    
    public function fly() {
        return "I can't fly because I am a pinguin. The pinguin can't fly! ;(";
    }
    
    public function swim(){
        return "I love the ice water";
    }
}