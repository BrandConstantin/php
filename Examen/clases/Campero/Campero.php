<?php

class Campero{
    private $tamanio;
    private $tipo;
    private $estado;
    private static $numPedidos;
    private static $numServidos;
    
    public function __construct($tamanio, $tipo, $estado) {
        $this->tamanio = $tamanio;
        $this->tipo = $tipo;
        $this->estado = $estado;
        self::$numPedidos++;
    }
    
    static function getNumPedidos() {
        return "Pedidos: ".self::$numPedidos;
    }

    static function getNumServidos() {
        return "Servidos: ".self::$numServidos."<br>";
    }

    public function sirve(){
        $this->estado = "servido";
        self::$numServidos++;
    }
    
    public function __toString() {
        return "Campero: $this->tipo - Tamaño: $this->tamanio --> $this->estado<br>";
    }
}