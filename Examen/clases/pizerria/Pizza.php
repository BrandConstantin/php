<?php

class Pizza{
    private $tamanio;
    private $tipo;
    private $estado;
    private static $numPedidas;
    private static $numServidas;
    
    public function __construct($tamanio, $tipo, $estado) {
        $this->tamanio = $tamanio;
        $this->tipo = $tipo;
        $this->estado = $estado;
        self::$numPedidas++;
    }
    
    static function getNumPedidas() {
        return "Pedidas: ".self::$numPedidas."<br>";
    }

    static function getNumServidas() {
        return "Servidas: ".self::$numServidas;
    }

    public function sirve(){
        $this->estado = "servida";
        self::$numServidas++;
    }
    
    public function __toString() {
        return "Pizza $this->tamanio $this->tipo --> $this->estado<br>";
    }
}