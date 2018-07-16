<?php

include './Vehiculo.php';

class Coche extends Vehiculo{
    private $totalKm;
    private $numVehiculos;
    private $cc;
    private $puertas;
    
    public function __construct($totalKm, $numVehiculos, $cc, $puertas) {
        parent::__construct($totalKm, $numVehiculos, $cc, $puertas);
        
        $this->cc = $cc;
        $this->puertas = $puertas;
    }
    
    public function accelerar(){
        return "zum brr zumm brrr zummm brrrr";
    }    
    
    public function __toString() {
        return parent:: __toString()
        ."<br>Edad del canario:". $this->puertas
        ."<br>Edad del canario:". $this->cc
        ."<br>Peso del canario: ".$this->puertas;
    }
}