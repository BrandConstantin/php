<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $resultadoPos;
    $resultadoNeg;
    
    if (a != 0){
     if (b != 0){
       if (c != 0){
         if (pow(b, 2) - (4 * a * c) >= 0){
           $resultadoPos = (-b + (sqrt(pow(b, 2) - (4 * a * c)))) / (2 * a);
           $resultadoNeg = (-b - (sqrt(pow(b, 2) - (4 * a * c)))) / (2 * a);
         }else{
           echo "Raíz cuadrada negativa.";
         }
       }else{
         if ((-b / a) >= 0){
           $resultadoPos = sqrt(-b / a);
           $resultadoNeg = -$resultadoPos;
         }else{
           echo "Raíz cuadrada negativa.";
         }
       }
     }else{
       if ((-c / a) >= 0){
         $resultadoPos = sqrt(-c / a);
         $resultadoNeg = -$ºresultadoPos;
       }else{
         echo "Raíz cuadrada negativa.";
       }
     }
   }else{
     echo "Ecuación sin solución real.";
   }

   if (!((resultadoPos > -0.00000001) && (resultadoPos < 0.00000001))){
     if (!((resultadoNeg > -0.0000001) && (resultadoNeg < 0.00000001))){
        echo "Resultado 1: ", $resultadoPos;
        echo "Resultado 2: ", $resultadoNeg;
     }
   }
?>