<?php

abstract class Animal{
    public $name;
    public $color;
    
    public function describe(){
        return $this->name.' is '.$this->color;
    }
    
    abstract public function makeSound();
}

class Duck extends Animal{
    public function describe() {
        return parent::describe();
    }
    
    public function makeSound() {
        return 'Quack';
    }
}

class Dog extends Animal{
    public function describe() {
        return parent::describe();
    }
    
    public function makeSound() {
        return 'Bark';
    }
}

$animal = new Duck();
$animal->name = 'Ben';
$animal->color =  'Yellow';
echo $animal->describe()." and ".$animal->makeSound();

echo "<br>";

$animal2 = new Dog;
$animal2->name = 'Layla';
$animal2->color =  'grey';
echo $animal2->describe()." and ".$animal2->makeSound();