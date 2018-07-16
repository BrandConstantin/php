<?php

class Person2{
    private $name;
    private $profesion;
    private $age;

    //constructor
    public function __construct($nam, $prof, $age){
        $this->name = $nom;
        $this->profesion = $pro;
        $this->age = $age;
    }

    public function presentation(){
        return "Helo, my name is ".$this->name." and I am a ". $this->profesion."<br>";
        return "My age is ".$his->age;
    }
    
    public function __toString() {
        return "<b>$this->name</b><br>"
                . "Profesion:$this->profesion<br>"
                . "Age:$this->age";
    }
}