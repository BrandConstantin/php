<?php

class Habitacion{
    //atributos de clase
    private $numHabit;
    private $tipoHabit;
    private $estadoHabit;
    private static $totalHabit = 0;
    private static $totalHabitLibre = 0;
    
    public function __construct($numHabit, $tipoHabit) {
        $this->numHabit = $numHabit;
        $this->tipoHabit = $tipoHabit;
        $this->estadoHabit = "Libre";
        Habitacion::$totalHabit++;
        Habitacion::$totalHabitLibre++;
    }
    
    static function getTotalHabit() {
        return self::$totalHabit;
    }

    static function getTotalHabitLibre() {
        return self::$totalHabitLibre;
    }

    public function reserva(){
        if($this->estadoHabit == 'Libre'){
            $this->estadoHabit = 'Reservada';
            Habitacion::$totalHabitLibre--;
            echo 'Reserva echa con exito<br>';
        }elseif ($this->estadoHabit == 'Ocupada') {
            echo 'Esta habitación ya esta ocupada!<br>';
        }else if ($this->estadoHabit == 'Reservada'){
            echo 'Esta habitación esta reservada<br>';
        }
    }
    
    public function ocupa(){
        if($this->estadoHabit == 'Libre'){
            $this->estadoHabit = 'Ocupada';
            Habitacion::$totalHabitLibre--;
            echo 'Habitación ocupada ya...<br>';
        }elseif ($this->estadoHabit == 'Ocupada') {
            echo 'Lo sentimos, ya esta ocupada la habitación<br>';
        }
    }
    
    public function __toString() {
        return 'Habitación nº: '.$this->numHabit." Tipo: ".$this->tipoHabit." Estado: ".$this->estadoHabit;
    }
}