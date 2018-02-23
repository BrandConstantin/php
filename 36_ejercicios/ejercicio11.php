<?php

$array = [13, 42, 83, 4, 53];

echo 'Recorrer array: <br/>';
foreach ($array as $value) {
    echo $value."   ";
}

echo "<br/><br/><br/>Ordenar<br/>";
sort($array);

foreach ($array as $value) {
    echo $value."  ";
}

echo "<br/><br/><br/>Ordenar descendiente<br/>";
rsort($array);

foreach ($array as $value) {
    echo $value."  ";
}

echo "<br/><br/><br/>Contar elementos array<br/>";
$contador = 0;

foreach ($array as $value) {
    $contador++;
}

echo $contador;

echo "<br/><br/><br/>Tambíen se puede utilizar count(array) = ".count($array)." o sizeof(array) = ".sizeof($array)."<br/>";

echo "<br/><br/><br/>Buscar en el array<br/>";

//primer parametro es lo que queremos buscar
//el segundo donde queremos buscar
if(!array_search(0, $array)){
    echo "Número no encontrado";
}else{
    echo "Número existente";
}