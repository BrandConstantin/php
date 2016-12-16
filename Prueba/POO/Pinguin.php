<?php

include_once 'Bird.php';

class Pinguin extends Bird{
    public function __construct($s) {
        parent::__construct($s);
    }
    
    public function clean() {
        return parent::clean()."The pinguin love clean up<br>";
    }
    
    public function fly() {
        return "I can't fly because I am a pinguin. The pinguin can't fly! ;(";
    }
}