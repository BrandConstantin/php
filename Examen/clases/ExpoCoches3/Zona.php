<?php
/**
 * Clase zona donde tendremos el numero de entradas y los metodos de Zona
 *
 * @author Juan Jose Fernandez Romero
 */
class Zona {
    private $nombre;
    private $plazasTotales;
    private $plazas;
    
    public function __construct($nombre, $plazas) {
        $this->nombre = $nombre;
        $this->plazasTotales = $plazas;
        
        $this->plazas = new SplFixedArray($plazas);
        for ($i = 0; $i < $this->plazasTotales; $i++) {
            $this->plazas[$i] = "Libre";
        }
    }
    
    // funcion para recoger el nombre
    public function getNombre() {
        return $this->nombre;
    }
    
    // funcion para recoger el numero de plazas totales
    public function getPlazasTotales() {
        return $this->plazasTotales;
    }
    
    // funcion para recoger la cantidad de plazas restantes
    public function getPlazasRestantes() {
        return $this->plazas;
    }
    
    public function __toString() {
        $resultado = "Zona " . $this->nombre . ": |";
        
        for ($i = 0; $i < $this->plazasTotales; $i++) {
            $resultado .= " " . ($i+1) . ": " . $this->plazas[$i]. " |";
        }
        return $resultado;
    }

    // funcion para vender entradas
    public function vender($nombre) {
        // For que recorre el array de entradas de la zona
        for ($i = 0; $i < $this->plazasTotales; $i++) {
            // Si el valor actual es igual al nombre que pasamos por parametro la vendemos
            if ($this->plazas[$i] === $nombre) {
                $this->plazas[$i] = "<span style='color:red;'>Vendida</span>";
                return true;
            }
        } 
        return false;
    }
    
    // función para reservar
    public function reservar($nombre) {
        // For que recorre el array de entradas de la zona
        for ($i = 0; $i < $this->plazasTotales; $i++) {
            // Si el valor actual es igual al nombre que pasamos por parametro la reservamos
            if ($this->plazas[$i] === "Libre") {
                $this->plazas[$i] = $nombre;
                echo $this->plazas[$i];
                return true;
            }
        } 
        return false;
    }
}