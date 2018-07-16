<?php

class ExpoCoches{
    private $descripcion;
    private $asientos;
    private $asientosLibres;
    
    public function __construct($des, $asientos, $asientosLibres) {
        $this->descripcion = $des;
        $this->asientos = $asientos;
        $this->asientosLibres = $asientosLibres;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function getAsientos(){
        return $this->asientos;
    }
    
    public function getAsientosLibres(){
        return $this->asientosLibres;
    }
    
    public function vende($vende){
        if($vende <= $this->asientosLibres){
            $this->asientosLibres = $this->asientosLibres - $vende;
            return true;
        }else{
            return false;
        }
    }
    
    public function __toString() {
        return "<br>".$this->descripcion.
                "<br>"."Total Asientos: ".$this->asientos." locations".
                "<br>Total Vendidas: ".($this->asientos - $this->asientosLibres).
                "<br>Total Libres: ".$this->asientosLibres."<br><hr>";
    }
}