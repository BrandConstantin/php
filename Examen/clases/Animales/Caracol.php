<?php

include_once './Animales.php';


class Caracol extends Animales{    
    public function tomaSol(){
        return "Me gusta tomar el sol";
    }
    
    public function esconde(){
        return "Me escondo, estoy asustado";
    }
    
    public function __toString() {
        return parent:: __toString()
            ."<br>Edad del caracol:". $this->getAnios()
            ."<br>Sexo del caracol:". $this->getSexo()
            ."<br>Peso del caracol: ".$this->getPeso();
    }
}