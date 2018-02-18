<?php

//return datatype
function dataReturn(): string {
    return "This is what the funcion will give back<br/>";
}

echo var_export(dataReturn());

//return datatype ///////////////////////////
function dataReturn2(): int {
    return "22";
}

echo var_export(dataReturn2());
echo "<br/>";

//return datatype ///////////////////////////
function dataReturn3(): int {
    return true;
}

echo var_export(dataReturn3());
echo "<br/>";

//return datatype ///////////////////////////
function dataReturn4(): float {
    return "22.22";
}

echo var_export(dataReturn4());
echo "<br/>";

//return datatype ///////////////////////////
function dataReturn5(): bool {
    return "00.00";
}

echo var_export(dataReturn5());
echo "<br/>";

//return datatype ///////////////////////////
function dataReturn6(): array {
    return array(20, "hello");
}

echo var_export(dataReturn6());
echo "<br/>";

//return datatype ///////////////////////////
function dataReturn7(): array {
    return array(20 => "hello");
}

echo var_export(dataReturn7());
echo "<br/>";

//return dataype /////////////////////////
class myOBJ {
    
}

function dataReturn8(): myOBJ {
    return new myOBJ;
}

echo var_export(dataReturn8());
echo "<br/>";

//return dataype /////////////////////////
function dataReturn9(): callable {
    return function() {
        echo "hello";
    };
}

echo var_export(dataReturn9());
echo "<br/>";

//return dataype /////////////////////////
class myOBJ2 {

    function dataReturn10($object): self{
        return $object;
    }

}

$a = new myOBJ2;

echo var_export($a->dataReturn10(new myOBJ2()));
echo "<br/>";
