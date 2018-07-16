<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $mensaje;
    
    if(($nota1 < 1 || $nota1 > 10) ||
            ($nota2 < 1 || $nota2 > 10) ||
            ($nota3 < 1 || $nota3 > 10)){
        echo 'Has introducido algúna nota menor que 1 o mayor que 10. No permitido!';
    }else{
        $media = ($nota1 + $nota2 + $nota3) / 3;
        if($media < 5){
            $mensaje = 'Insuficiente';
        }else if ($media >= 5 && $media <= 6) {
            $mensaje = 'Suficiente';
        }else if($media >= 7 && $media <= 8){
            $mensaje = 'Bien';
        }else if($media == 9){
            $mensaje = 'Notable';
        }else{
            $mensaje = 'Sobresaliente';
        }
        echo '<h1>Tu media es de: ', round($media), '</h1>';
        echo $mensaje;
    }
?>
