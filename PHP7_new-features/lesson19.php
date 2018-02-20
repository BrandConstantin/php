<?php

function satNav(){
    $distance = 0;
    
    echo "start";
    
    yield "<br/>first stop";
    
    echo "<br/>to left";
    
    yield "<br/>second stop";
    
    echo "<br/>destination reached";
    echo "<br/>your journey was ".$distance." miles";
}

$control = satNav();
echo $control->current();

echo $val = " concat 123";

echo $control->next();
echo $control->current();

echo $control->next();