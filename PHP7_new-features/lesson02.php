<?php

function parse1(array $ints) {
    echo '<pre>' . json_encode($ints, JSON_PRETTY_PRINT) . '</pre>';
}

$arr = array("Hello", "World", "from", "Netbeans");
parse1($arr);

function parse2(array $ints) {
    echo '<pre>' . json_encode($ints, JSON_PRETTY_PRINT) . '</pre>';
}

$arr = array("Hello" => "World", "from" => "Netbeans");
parse2($arr);
