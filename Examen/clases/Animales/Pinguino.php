<?php

include_once './Pajaros.php';
include_once './Animales.php';

class Pinguino extends Pajaros{        
    public function seLimpia() {
        return parent::seLimpia();
    }
    
    public function seLimpiaPinguino(){
        return "Soy un pinguino limpio";
    }
    
    public function vuela() {
        return parent::vuela();
    }
    
    public function vuelaPinguino(){
        return "La verdad que no puedo volar, soy un pinguino";
    }
    
    public function nada(){
        return "Me encanta nadar en agua congelada";
    }
    
    public function __toString() {
        return parent:: __toString()."<br>Sexo del pinguino: ".$this->getSexo()
        ."<br>Edad del pinguino:". $this->getAnios()
        ."<br>Peso del pinguino: ".$this->getPeso();
    }
}