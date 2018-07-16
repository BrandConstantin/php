<?php

class Vehiculo{
    //variable de clase
    private static $totalKm = 0;
    private static $numVehiculos = 0;
    
    //variable de instancia
    private $kmRecuridos;

    //métodos de clase
    static function getTotalKm() {
        return self::$totalKm;
    }

    static function getNumVehiculos() {
        return self::$numVehiculos;
    }

    function getKmRecuridos() {
        return $this->kmRecuridos;
    }

    //métodos de instancia
    public function __construct($totalKm, $numVehiculos) {
        Vehiculo::$numVehiculos++;
        $this->totalKm = 0;
    }
    
    public function recure($km){
        $this->kmRecuridos += $km;
        Vehiculo::$totalKm += $km;
    }
}