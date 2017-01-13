<?php

abstract class Animal{
    private $sex;
    
    public function __construct($s = "male") {
        $this->sex = $s;
    }
    
    public function __toString() {
        return "Sex: $this->sex";
    }
    
    public function getSex(){
        return $this->sex;
    }
    
    public function sleep(){
        return "zszszzzzszzszz";
    }
    
    public function clean(){
        return "I don't like because I an animal<br>";
    }
}