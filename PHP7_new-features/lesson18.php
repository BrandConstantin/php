<?php

function generate(){
    echo "start the car";
    yield "<br/>First stop";
    
    echo "<br/>continue driving";
    yield "<br/>Second stop";
    
    echo "<br/>destination";
    yield "<br/>stop again";
}