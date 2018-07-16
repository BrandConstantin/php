<?php

include_once './Vehiculo.php';

class Motos extends Vehiculo{
    private $velocidad;
    private $color;
    
    public function __construct($totalKm, $numVehiculos, $velocidad, $color) {    
        parent::__construct($totalKm, $numVehiculos, $velocidad, $color);
        $this->velocidad = $velocidad;
        $this->color = $color;        
    }
    
    public function rompe(){
        return  "Se me ha roto la moto";
    }
    
    public function __toString() {
        return parent:: __toString()
        ."<br>Edad del canario:". $this->velocidad
        ."<br>Peso del canario: ".$this->getKmRecuridos();
    }
}