<?php

include_once './Animales.php';

class Mamiferos extends Animales{
    public function __construct($sxo, $anio, $pso) {
        parent::__construct($sxo, $anio, $pso);
    }
    
    public function amamanta(){
        if(($this->getSexo() == "macho") && ($this->getAnios() >= 2)){
            return "Soy macho, no puedo amamantar";
        }else if(($this->getAnios() >= 2) && ($this->getSexo() != "macho")){
            return "Ahora mismito....";
        }else {
            return "Soy demasiado joven para poner huevos!";
        }
    }
}