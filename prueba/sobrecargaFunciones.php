<?php
    //ejemplo de sobrecarga de un método según el número
    //de parámetros que se pasen

    //si se pasa un número devuelve un cuadrada
    //si se pasan dos devuelve una multiplicación
    //si se pasan tres se devuelve la suma

    function operaciones($a, $b, $c){
        if(!isset($b)){
            return $a * $a;
        }else if(!isset ($c)){
            return $a * $b;
        }else{
            return $a + $b + $c;
        }
    }
    
    //otro ejemplo según el número de parámetros que se pasen
    
    //si se pasan dos número entereos se devuelve la suma
    //sino se muestran separados por coma
    function operaciones2($x, $z){
        if(is_int($x) && (is_int($z))){
            return $x + $z;
        }else{
            return $x.",".$z;
        }
    }
?>