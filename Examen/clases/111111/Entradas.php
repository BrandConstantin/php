<?php

class Entradas {  
    private $nombre;
    private $vendidas;
    private $entradasDisponibles;
    private static $entradasVendidas;
    
    public function __construct($nombre, $vendidas, $numEntradas) {
      $this->nombre = $nombre; 
      $this->vendidas = $vendidas;
      $this->entradasDisponibles = $numEntradas;
      //self::$entradasVendidas =  $entradaVendidas;
    }

    function getEntradasDisponibles() {
        return $this->entradasDisponibles;
    }
    
    static function getEntradasVendidas(){
        return self::$entradasVendidas;
    }
            
    function setEntradasDisponibles($entradasDisponibles) {
        $this->entradasDisponibles = $entradasDisponibles;
    }

    /*public function venta($entradasVendidas) {
        if ( $this->entradasDisponibles - $entradasVendidas < 0){
            echo "<br><b>No se disponen de tantas entradas a la venta </b><br>";
        }else{
            echo $this->entradasDisponibles = $this->entradasDisponibles - $entradasVendidas;
        }
    }*/
    public function venta() {
        $this->vendidas = "vendidas";
        self::$entradasVendidas;
    }
    
    public function __toString() {
      return "<h3>" . $this->nombre ."</h3>
      Entradas Totales: $this->entradasDisponibles<br>
      Entradas Vendidas: $this->vendidas<br><br>";
    }
}