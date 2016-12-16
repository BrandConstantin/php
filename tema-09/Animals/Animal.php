<?php

class Animal{
    private $sex;
    private $age;
    
    public function __construct($s, $a) {
        if(!isset($s)){
            $this->sex = "male";
        }else{
            $this->sex = $s;
        }
        
        if(!isset($a)){
            $this->age = 1;
        }else{
            $this->age = $a;
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
        return "I am eat $eat";
    }
    
    public function sleep(){
        return "zsss zsss zsss ";
    }
}