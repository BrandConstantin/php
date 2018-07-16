<?php

include_once './Animales.php';

class Pajaros extends Animales{
    public function __construct($sxo, $anio, $pso) {
        parent::__construct($sxo, $anio, $pso);
    }
    
    public function seLimpia(){
        return "Me limpio las alas!";
    }
    
    public function vuela(){
        return "Estoy volando!";
    }
    
    public function poneHuevos(){
        if(($this->getSexo() == "macho") && ($this->getAnios() >= 2)){
            return "Soy macho, no puedo poner huevos";
        }else if(($this->getAnios() >= 2) && ($this->getSexo() != "macho")){
            return "Ahora mismito....";
        }else {
            return "Soy demasiado joven para poner huevos!";
        }
    }
}