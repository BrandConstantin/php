<?php

/*  include 'Foo.php';
    include 'Bar.php';*/
//si hay mas de un fichero en vez de incluir uno por uno se emplea
spl_autoload_register(function($class_name){
    include $class_name.'.php'
;});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
echo '<br/>';
$bar->hi();