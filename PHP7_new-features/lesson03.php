<?php

/* 
 * callable
 * 
 */

function parse(callable $callback){
    echo "This string came from the parse function<br/>";
    
    $callback();
}

$func = (function(){ echo "Callable Function - This string came from the callback function";});

parse ($func);


///////////////////////////////
interface checer{}

class cake implements checer{}
class salad{}

function restaurant(cake $food){
    echo var_dump($food);
}

$box = new cake;
restaurant($box);

//////////////////////////
//self declaration
class drink{
    function drinking(self $thisDrink){
        echo "Drink this drink<br/>";
        echo var_dump($thisDrink);
    }
}

$Drink1 = new drink;
$Drink2 = new drink;

$Drink2->drinking($Drink1);