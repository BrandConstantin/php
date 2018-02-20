<?php

function values(){
    yield "string";
    yield 100;
    yield 10.1;
    yield TRUE;
}

$control = values();

//echo $control->current();
//
//$control->next();
//echo "<br/>".$control->current();
//
//$control->next();
//echo "<br/>".$control->curret();
//
//$control->next();
//echo "<br/>".$control->curret();


//cambiamos todo esto con
foreach ($control as $values){
    echo "<br/>".json_encode($values, JSON_PRETTY_PRINT);
}

echo "<br/><br/><br/>";

class myObs{}

function values2(){
    yield ['string', "array", 200];
    yield array("hello"=>4, "key"=>"key");
    yield new myObs();
}

$control2 = values2();

//cambiamos todo esto con
foreach ($control2 as $value){
    echo "<br/>".json_encode($value, JSON_PRETTY_PRINT);
}

echo "<br/><br/><br/>";

function values3(){
    yield from ['string', "array", 200];
    yield from array("hello"=>4, "key"=>"key");
}
$control3 = values3();

//cambiamos todo esto con
foreach ($control3 as $value){
    echo "<br/>".json_encode($value, JSON_PRETTY_PRINT);
}

echo "<br/><br/><br/>";

function values4(){
    yield 100;
    yield 150;
    return 400;
}

$control4 = values4();

//cambiamos todo esto con
foreach ($control4 as $value){
    echo "<br/>".json_encode($value, JSON_PRETTY_PRINT);
}
echo "<br/>".$control4->getReturn();

echo "<br/><br/><br/>";

function values5(){
    yield from val();
    yield 150;
    return 400;
}

function val(){
    yield "this is the first";
}

$control5 = values5();

//cambiamos todo esto con
foreach ($control5 as $value){
    echo "<br/>".json_encode($value, JSON_PRETTY_PRINT);
}
echo "<br/>".$control5->getReturn();