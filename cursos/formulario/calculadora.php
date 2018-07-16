<?php

$var1 = $_POST['valor1'];
$var2 = $_POST['valor2'];
$operador = $_POST['operador'];

function calcular($var1, $var2){
    $ope = $_POST['operador'];
    
    switch ($ope) {
        case 0:
            $res = $var1 + $var2;
            break;
        case 1:
            $res = $var1 - $var2;
            break;
        case 2:
            $res = $var1 * $var2;
            break;
        case 3:
            $res = $var1 / $var2;
            break;
    }
    
    return $res;
}

$operacion = array('suma', 'resta', 'multiplicacion', 'division');

echo 'El resultado de la '.$operacion[$operador].' es: '.calcular($var1, $var2);

?>
<br><br><br>
<a href="index.php">Volver</a>