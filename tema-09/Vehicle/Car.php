<?php

include_once 'Vehicle.php';

class Car extends Vehicle{
    private $cc;
    private $doors;
    
    public function __construct($cc, $doo) {
        parent::__construct($cc, $doo);
        $this->cc = $cc;
        $this->doors = $doo;
    }
    
    public function accelerate(){
        return "....................";
    }
    
}