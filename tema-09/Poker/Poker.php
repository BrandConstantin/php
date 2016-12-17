<?php

class Poker{
    private static $faces = array("AS  ", "K  ", "Q  ", "J  ", "7  ", "8  ");
    private static $totalThrows = 0;
    private $faceCard;
    
    public static function getTotalThrows(){
        return Poker::$totalThrows;
    }
    
    public function setTotalThrows($totalThrows){
        self::$totalThrows = $totalThrows;
    }
    
    public function throwFace(){
        $this->faceCard = self::$faces[rand(0, 5)];
        self::$totalThrows++;
    }
    
    public function nameFace(){
        return $this->faceCard;
    }
}