<?php
class People{
    public $person1 = 'Jack';
    public $person2 = 'Michel';
    public $person3 = 'Lorete';
    
    protected $person4 = 'Jeff';
    private $person5 = 'Jenny';
    
    //para mostrar todo
    function iterateObject(){
        foreach ($this as $key => $value){
            print "$key => $value\n";
        }
    }
}

$people = new People();
$people->iterateObject();

echo "<br>";
//para mostrar solo lo que es publico
foreach ($people as $key => $value) {
    print "$key => $value\n";
}