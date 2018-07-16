<?php

class Curso{
    //atributos de clase
    private $codigo;
    private $descripcion;
    private $alumnosPermitidos;
    private $estado;
    private static $totalCursos = 0;
    private static $cursosActivos = 0;
    
    public function __construct($codigo, $descripcion, $alumnosPermitidos) {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->alumnosPermitidos = $alumnosPermitidos;
        $this->estado = 'inactivo';
        Curso::$totalCursos++;
        Curso::$cursosActivos++;
    }
    
    static function getTotalCursos() {
        return self::$totalCursos;
    }

    static function getCursosActivos() {
        return self::$cursosActivos;
    }
         
    public function activa(){
        //if($this->estado == 'inactivo'){
            $this->estado = 'activo';
            Curso::$cursosActivos++;
        //}elseif($this->estado == 'activo'){
          //  echo 'Curso ya activo!';
        //}
        Curso::$cursosActivos = $this->getTotalCursos() - $this->getCursosActivos();
    }

    public function __toString() {
        return $this->codigo." : ".$this->descripcion." con capacidad para "
                . $this->alumnosPermitidos." alumnos (".$this->estado.")<br>";
    }
}