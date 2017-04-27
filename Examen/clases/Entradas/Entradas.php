<?php

class Entradas {  
    private $nombre;
    private $entradasDisponibles;
    
    public function __construct($nombre, $num) {
      $this->nombre = $nombre;  
      $this->entradasDisponibles = $num;
    }

    function getEntradasDisponibles() {
        return $this->entradasDisponibles;
    }
     
    function setEntradasDisponibles($entradasDisponibles) {
        $this->entradasDisponibles = $entradasDisponibles;
    }
    
    public function venta($entradasVendidas) {
        if ( $this->entradasDisponibles - $entradasVendidas < 0){
            echo "<br><b>No se disponen de tantas entradas a la venta </b><br>";
        }else{
            $this->entradasDisponibles = $this->entradasDisponibles - $entradasVendidas;
        }
    }
    
    public function __toString() {
      return "<h3>" . $this->nombre ."</h3>
      Entradas totales: $this->entradasDisponibles<br>
      Entradas Vendidas: $this->entradasVendidas<br><br>";
    }
}