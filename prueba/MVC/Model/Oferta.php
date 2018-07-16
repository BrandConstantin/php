<?php

require_once 'conexionDB.php';

class Oferta{
    private $id;
    private $titulo;
    private $imagen;
    private $descripcion;
    
    function __construct($id, $titulo, $imagen, $descripcion) {
        $this->$id;
        $this->$titulo;
        $this->$imagen;
        $this->$descripcion;
    }
    
    public function getId(){
        return $this->$id;
    }
    
    public function getTitulo(){
        return $this->$titulo;
    }
    
    public function getImagen(){
        return $this->$imagen;
    }
    
    public function getDescripcion(){
        return $this->$descripcion;
    }
    
    public function insert(){
        $conexion = conexionDB::connectDB();
        $insercion = "INSERT INTO oferta (titulo, imagen, descripcion) VALUES (\""
                .$this->titulo."\", \"".$this->imagen."\", \"".$this->descripcion."\")";
        $conexion->exec($insercion);
    }
    
    public function delete(){
        $conexion = conexionDB::connectDB();
        $borrado = "DELETE FROM oferta WHERE id=\"".$this->id."\"";
        $conexion->exec($borrado);
    }
    
    public static function getOfertas(){
        $conexion = PizzeriaDB::connectDB();
        
        $seleccion = "SELECT id, titulo, imagen, descripcion FROM oferta";
        $consulta = $conexion->query($seleccion);
        
        $ofertas = [];
        
        while($registro = $consulta->fetchObject()){
            $ofertas[] = new Oferta($registro->id, $registro->titulo, $registro->imagen,
                    $registro->descripcion);
        }
        
        return $ofertas;
    }
    
    public static function getOfertasById($id){
        $conexion = PizzeriaDB::connectDB();
        
        $seleccion = "SELECT id, titulo, imagen, descripcion FROM oferta WHERE id=\"".
                $id."\"";
        
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $oferta = new Oferta($registro->id, $registro->titulo, $registro->imagen,
                $registro->descripcion);
        
        return $oferta;
    }
}