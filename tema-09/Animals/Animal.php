<?php

class Animal{
    private $sex;
    private $age;
    
    public function __construct($sx, $ag) {
        if(!isset($sx)){
            $this->sex = "male";
        }else{
            $this->sex = $sx;
        }
        
        if(!isset($ag)){
            $this->age = 1;
        }else{
            $this->age = $ag;
        }
    }
    
    public function __toString() {
        return "Sex: $this->sex";
        
        return "Age: $this->age";
    }
    
    public function getSex(){
        return $this->sex;;
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function eating($eat){
        return "I'm eat $eat";
    }
    
    public function sleep(){
        return "zsss zsss zsss ";
    }
}