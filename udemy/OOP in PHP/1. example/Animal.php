<?php 

abstract class Animal{
    public $name;
    public $color;

    public function describe(){
        return $this->name.' is '.$this->color;
    }

    abstract function makeSound();
}

class Duck extends Animal{
    public function describe (){
        return parent::describe();
    }

    public function makeSound(){
        return 'Quack';
    }
}

class Dog extends Animal{
    public function describe (){
        return parent::describe();
    }

    public function makeSound(){
        return 'Bark';
    }
}

$animal = new Duck();
$animal->name = 'Ben';
$animal->color = 'Yellow';
echo $animal->describe();
echo $animal->makeSound();
$animal = new Dog();
$animal->name = 'Layla';
$animal->color = 'Grey';
echo $animal->describe();
echo $animal->makeSound();