<?php

class Poker{
    private static $caras = array("AS  ", "K  ", "Q  ", "J  ", "7  ", "8  ");
    private static $totalTiradas = 0;
    private $cara;

    public static function getTotalTiradas() {
        return Poker::$totalTiradas;
    }

    static function setTotalTiradas($totalTiradas) {
        self::$totalTiradas = $totalTiradas;
    }

    public function caraTirada(){
        $this->cara = self::$caras[rand(0, 5)];
        self::$totalTiradas++;
    }
    
    public function nombreCara(){
        return $this->cara;
    }
}