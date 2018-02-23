<?php

$array = array();

for ($index = 0; $index <= 100; $index++) {
    $array[] = $index;
    echo $array["numero - {$index}"] = $index."  ";
}

echo "<br/><br/><br/>";

//introducir valor en el array con push
for ($index = 0; $index <= 100; $index++) {
    array_push($array, $index);
    echo $array[$index]."  ";
}

echo "<br/><br/><br/>";

var_dump($array);