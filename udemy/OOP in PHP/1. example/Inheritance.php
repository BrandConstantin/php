<?php

class First{
    public $id = 23;
    public $name1 = 'BrandConstantin';
    protected $name2 = 'ConstantinBrand';

    public function saySomething(){
        echo '<br/>Something...';
    }
}

class Second extends First{
    public function getName(){
        echo '<br/>'.$this->name2;
    }
}

$second = new Second;
echo $second->name1;
echo $second->getName();
echo $second->saySomething();