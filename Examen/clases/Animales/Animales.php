<?php

class Animales{
    private $sexo;
    private $anios;
    private $peso;
    
    public function __construct($sxo, $anio, $pso) {
        //si no se inicializa el sexo se atribuye por defecto "macho"
        if(!isset($sxo)){
            $this->sexo = "macho";
        }else{
            $this->sexo = "hembra";
        }
        
        //si no se define el anio del animal se da por echo que un año
        if(!isset($anio)){
            $this->anios = 1;
        }else{
            $this->anios = $anio;
        }
        
        $this->peso = $pso;
    }
    
    function getSexo() {
        return $this->sexo;
    }

    function getAnios() {
        return $this->anios;
    }

    function getPeso() {
        return $this->peso;
    }

    public function come($come){
        return "Comó $come";
    }
    
    public function duerme(){
        return "zzzssss zssss";
    }
    
    public function bebe(){
        return "aguaaa";
    }
    
    public function __toString() {
        return "<br>Sexo del animal: $this->sexo";
        return "<br>Edad del animal: $this->anios";
        return "<br>Peso del animal: $this->peso";
    }
}