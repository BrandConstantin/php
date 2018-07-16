<?php

class Person{
    private $name;
    private $profesion;

    //constructor
    public function __construct($nam, $prof){
        $this->name = $nom;
        $this->profesion = $pro;
    }

    public function presentation(){
        echo "Helo, my name is ".$this->name." and I am a ". $this->profesion."<br>";
    }
}
                
?>