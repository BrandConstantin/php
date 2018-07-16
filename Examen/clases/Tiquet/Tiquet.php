<?php
 
class Tiquet {
    private $coche = 0;
    private $hora;
    private $min;
    private static $recaudacion = 0;
 
    //metodos
 
    public function __construct($h, $m) {
        $this->coche++;
        $this->hora = $h;
        $this->min = $m;
    }
 
    public function paga($h, $m) {
        $tiempo = 0;//usaré esta variable para calcular cuanto hay que pagar
        $tiempo += $m - $this->min;
        $tiempo += ($h - $this->hora) * 60;
        echo "Tiquet nº ".$this->coche.".Debe pagar ".$tiempo * 0.02." euros. Gracias<br>";
        Tiquet::$recaudacion += $tiempo * 0.02;
    }
     
    public static function getRecaudacion() {
        return Tiquet::$recaudacion;
    }
}