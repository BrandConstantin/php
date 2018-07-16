<?php

class Pizza{
    private $nombre;
    private $tipo;
    private $estado;
    private static $numPedidas;
    private static $numServidas;
    
    public function __construct($nombre, $tipo, $estado) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;        
        $this->estado = $estado;
        self::$numPedidas++;
    }
    
    static function getNumPedidas() {
        return "Pedidas: ".self::$numPedidas;
    }

    static function getNumServidas() {
        return "Servidas: ".self::$numServidas;
    }

    public function sirve(){
        $this->estado = "servida";
        self::$numServidas++;
    }
    
    public function __toString() {
        return "Pizza: $this->nombre - Tamaño: $this->tipo --> $this->estado<br>";
    }
}