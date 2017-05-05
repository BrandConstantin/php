<?php
include_once './Mamiferos.php';

class Gato extends Mamiferos{
    //atributos
    private $rasa;
    
    //métodos
    public function __construct($sxo, $anio, $pso, $rasa, $color) {
        parent::__construct($sxo, $anio, $pso, $rasa, $color);
        
        $this->color = $color;
        
        if(!isset($rasa)){
            $this->rasa = "sin pelo";
        }else{
            $this->rasa = $rasa;
        }
        
        if(!isset($kg)){
            $this->kg = 3;
        }else{
            $this->kg = $kg;
        }
    }
    
    public function __toString() {
        return parent::__toString()."<br>Rasa: $this->rasa"
            . "<br>Color del gato: $this->color"
            ."<br>Edad del gato:". $this->getAnios()
            ."<br>Peso del gato: ".$this->getPeso();
    }
    
    public function maulla(){
        echo "miau<br>";
    }
    
    public function come($come) {
        parent::come($come);
        
        if($come == "pescado"){
            return "Me encanta el pescado";
        }else{
            return "Yo no como lentejas";
        }
    }
    
    public function sePelea($oponente){
        if($this->getSexo() == "macho"){
            return "Te reviento";
        }else if($oponente->getSexo() == "hembra"){
            return "No peleo con hembras";
        }else{
            return "No tengo ganas pelear";
        }
    }
}