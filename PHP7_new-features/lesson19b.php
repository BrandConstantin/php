<?php

function satNav(){
    $distance = 0;
    
    echo "start";
    
    $distance = yield;
    
    echo $distance."<br/> miles to left";
    
    $distance = yield;
    
    echo $distance."<br/>miles and destination reached";
}

$control = satNav();
echo $control->current();

echo " <br/>analysing distance...<br/>";

$control->send(50);

echo " <br/>analysing distance...<br/>";
$control->send(150);