<?php

class ExpoCar{
    private $description;
    private $saffron;
    private $freeEntry;
    
    public function __construct($des, $saff, $free) {
        $this->description = $des;
        $this->saffron = $saff;
        $this->freeEntry = $free;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function getSaffron(){
        return $this->saffron;
    }
    
    public function getFreeEntry(){
        return $this->freeEntry;
    }
    
    public function sell($sell){
        if($sell <= $this->freeEntry){
            $this->freeEntry = $this->freeEntry - $sell;
            return true;
        }else{
            return false;
        }
    }
    
    public function __toString() {
        return "<br>".$this->description.
                "<br>"."Total Saffron: ".$this->saffron." locations".
                "<br>Sells locations: ".($this->saffron - $this->freeEntry).
                "<br>Free Locations: ".$this->freeEntry."<br><hr>";
    }
}