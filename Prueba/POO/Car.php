<?php
    class Car{
        //atributo de clase
        private static $kmTotal = 0;
        
        //métodos de clase
        public static function getKmTotal(){
            return Car::$kmTotal;
        }
        
        private $brand;
        private $model;
        private $km;
        
        public function __construct($bra, $mod) {
            $this->brand = $bra;
            $this->model = $mod;
            $this->km = 0;
        }
        
        public function getKm(){
            return $this->km;
        }
        
        public function run($km){
            $this->km += $km;
            Car::$kmTotal += $km;
        }
    }
?>