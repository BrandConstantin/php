<?php

namespace avelx\complicated;

class hello{
    function __construct() {
        echo "created loz";
    }
}

class anotherloz{
    function __construct() {
        echo "<br/>created another lox";
    }
}

function all(){
    echo "all";
}

function all2(){
    echo "<br/>";
}

const HELLO = "hello";
const GOODBYE = "<br/>goodbye";