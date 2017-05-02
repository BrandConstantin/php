<?php
/*
include './Foo.php';
include './Bar.php';
*/

//para no incluir muchos ficheros se puede hacer esto
spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
echo '<br>';
$bar->sayHi();