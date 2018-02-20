<?php

class myClass{
    function myClass($arg1){
        $this->createProp = $arg1;
    }
}

$test = new myClass("old style constructor");
echo $test->createProp;

echo "<br/>";

class myClass2{
    function metodo(){
        echo "method run";
    }
}

myClass2::metodo();

echo "<br/><br/><br/>";

echo password_hash("passwords", PASSWORD_DEFAULT, array(
    //en cuanto más grande el número más tiempo toma la página para procesar y encryptar la pass
    'cost'=>12
));

echo "<br/><br/><br/>";

$fp = fopen('http://www.google.com', 'g');
$meta = stream_get_meta_data($fp);

echo "<pre>".json_encode($meta, JSON_PRETTY_PRINT)."</pre>";
fclose($fp);

echo "<br/><br/><br/>";

function test(){
    return array (200, 20, 59, 53, 65);
}

$ar = test()[1];
echo $ar;