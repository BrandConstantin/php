<?php

include_once './Mamiferos.php';

class Perro extends Mamiferos{
    private $rasa; 
    
    public function __construct($sxo, $anio, $pso, $rasa) {
        parent::__construct($sxo, $anio, $pso, $rasa);
        
        if(!isset($rasa)){
            $this->rasa = $rasa;
        }else{
            $this->rasa = "doberman";
        }
    }

    public function __toString() {
       return parent::__toString()."<br>Raza perro: ".$this->rasa
            ."<br>Edad del perro:". $this->getAnios()
            ."<br>Sexo del perro:". $this->getSexo()
            ."<br>Peso del perro: ".$this->getPeso();
    }
    
    public function ladra(){
        return "Ham Ham";
    }
    
    public function tiraPelota(){
        return "Tira la pelota y la traigo de vuelta";
    }
}