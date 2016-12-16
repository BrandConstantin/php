<?php

include_once 'Animal.php';

class Lizard extends Animal{
    public function takeSun(){
        return "I take the sun";
    }
    
    public function hide(){
        return "Hide, hide, hide......the danger it's hear!";
    }
}