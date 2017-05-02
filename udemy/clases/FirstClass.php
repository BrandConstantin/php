<?php

class FirstClass{
    public $id = 30;
    public $name = 'Brand';
    protected $name2 = 'Roman';


    public function saySomething($word){
        echo $word;
    }
}

class SecondClass extends FirstClass{
    public function getName(){
        echo $this->name2;
    }
}

$second = new SecondClass;

echo $second->name." ". $second->saySomething(' Hello ');
echo $second->getName();