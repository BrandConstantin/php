<?php

class Vehicle{
    //variables de clase
    private static $kmTotal = 0;
    private static $numVehicle = 0;
    
    //variable de instancia
    private $kmRun;
    
    //métodos de clase
    public static function getNumVehicle(){
        return Vehicle::$numVehicle;
    }
    
    public static function getKmTotal(){
        return Vehicle::$kmTotal;
    }
    
    //métodos de instancia
    public function __construct() {
        Vehicle::$numVehicle++;
        $this->kmRun = 0;
    }
    
    public function getKmRun(){
        return $this->kmRun;
    }
    
    public function run($km){
        $this->kmRun += $km;
        Vehicle::$kmTotal += $km;
    }
}