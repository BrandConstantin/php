<?php

class People{
    public $person1 = 'Maggie';
    public $person2 = 'Lisa';
    public $person3 = 'Bart';
    private $person4 = 'Homer';
    protected $person5 = 'Margaret';

    function iterateObject(){
        foreach($this as $key => $value){
            print "$key => $value\n";
        }
    }
}

$people = new People;
$people->iterateObject();


echo '<br/>';

foreach($people as $key => $value){
    print "$key => $value\n";
}