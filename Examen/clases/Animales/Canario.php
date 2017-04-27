<?php

include_once './Pajaros.php';

class Canario extends Pajaros{
    private $color;
    
    public function __construct($sxo, $anio, $pso, $color) {
        parent:: __construct($sxo, $anio, $pso, $color);
        
        if(isset($color)){
            //si el color esta inicializado se le atribuye un color sino por defecto amarillo
            $this->color = $color;
        }else{
            $this->color = "amarillo";
        }
    }
    
    public function __toString() {
        return parent:: __toString()."<br>Color del canario: $this->color";
        //return parent::__toString()."Peso pajaro $this->pso";
    }
    
    public function canta(){
        return "tri liu liu tri la";
    }
    /*
    public function seLimpia(){
        parent:: seLimpia();
    }*/
}