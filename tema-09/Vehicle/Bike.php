<?php

include_once 'Vehicle.php';

class Bike extends Vehicle {
    private $velocity;
    private $color;
    
    public function __construct($vel, $col) {
        parent::__construct($vel, $col);
        $this->velocity = $vel;
        $this->color = $col;
    }
    
    public function broke(){
        return "ups I broke the bike";
    }
    
    public function color(){
        return "The new color that I wana paint my bike is black ";
    }
}