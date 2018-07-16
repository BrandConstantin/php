<?php
require_once 'BlogBD.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Story
 *
 * @author costy
 */

class Story {
    //Atributos de instancia
    private $IdStory;
    private $TitleStory;
    private $DateStory;
    private $TextStory;
    //Constructor
    function __construct($titleStory, $textStory, $DateStory, $IdStory) {
        $this->TextStory = $textStory;
        $this->TitleStory = $titleStory;
        
        if(isset($DateStory)){
            $this->DateStory = $DateStory;
            $this->IdStory = $IdStory;
        }
    }
    
    //Getters y setters
    function getIdStory() {
        return $this->IdStory;
    }

    function getTitleStory() {
        return $this->TitleStory;
    }

    function getDateStory() {
        return $this->DateStory;
    }

    function getTextStory() {
        return $this->TextStory;
    }
    
    function setIdStory($IdStory) {
        $this->IdStory = $IdStory;
    }

    function setTitleStory($TitleStory) {
        $this->TitleStory = $TitleStory;
    }

    function setDateStory($DateStory) {
        $this->DateStory = $DateStory;
    }

    function setTextStory($TextStory) {
        $this->TextStory = $TextStory;
    }

        
    //Métodos de instancia
    public function insert() {
        $conection = BlogBD::connectDB();
        
        $inserction = "INSERT INTO Story (TitleStory, TextStory)"
                . " VALUES (\"".$this->TitleStory."\", \"".$this->TextStory."\")";
        
        $conection->exec($inserction);
    }
    
    public function delete() {
        $conection = BlogBD::connectDB();
        
        $deleted = "DELETE FROM Story WHERE IdStory=\"".$this->IdStory."\"";
        
        $conection->exec($deleted);
    }
    
    public function update($IdStory) {
        $conection = BlogBD::connectDB();
    
        $update = "UPDATE Story SET TitleStory=\"".$this->TitleStory."\", TextStory=\"".$this->TextStory."\"".
            " WHERE IdStory=".$IdStory;
    
        $conection->exec($update);
    }
    
    //Métodos de clase
    public static function getStorys() {
        $conection = BlogBD::connectDB();
        
        $selection = "SELECT * FROM Story";
        
        $query = $conection->query($selection);    
        $storys= [];    
        
        while ($registry = $query->fetchObject()) {
          $storys[] = new Story($registry->TitleStory, $registry->TextStory, $registry->DateStory, $registry->IdStory);
        }   
        
        return $storys;    
    }
    
    public static function getStory($attribute, $value) {
        $conection = BlogBD::connectDB();
        
        $selection = "SELECT * FROM Story WHERE ".$attribute. "=\"".$value."\"";
        
        $query = $conection->query($selection);  
        $registry = $query->fetchObject();
        
        $Story = new Story($registry->TitleStory, $registry->TextStory, $registry->DateStory, $registry->IdStory);
        
        return $Story;
    }

}
