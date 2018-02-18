<?php

$context = function(){
    echo var_dump($this);
};

class newObj{public $prop = "hello<br/>";}

$context->call(new newObj);

///////////////////////////////////////////////
$context = function(){
    echo $this->prop;
};

class newObj2{public $prop = "hello<br/>";}

$context->call(new newObj2);