<!DOCTYPE html>
<!--
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Número minimo y máximo</title>
    </head>
    <body>
        <?php
            $numero = $_POST["numero"];
            $contadorNumero = $_POST["contadorNumero"];
            $numeroTexto = $_POST["numeroTexto"];
            
            if(!isset($numero)){
                $contadorNumero = 0;
                $numeroTexto = " ";
            }
 
            if(($contadorNumero < 10) || (!isset($numero))){
        ?>
        <form action="minYmax.php" method="post">
            Introduzca un número:
            <input type="number" name ="numero" autofocus>
            <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
            <input type="hidden" name="numeroTexto" value="<?= $numeroTexto." ".$n ?>">
            <input type="submit" value="OK">
          </form>
        <?php
            }   
                       
            if($contadorNumero == 10){
                //quitar el ultimo número 
                $numeroTexto = $numeroTexto." ".$numero;
                //quitar los espacios sobrantes
                $numeroTexto = substr($numeroTexto, 2);
                $valor = explode(" ", $numeroTexto);
                
                $min = PHP_INT_MAX;
                $max = -PHP_INT_MAX;
                
                foreach ($valor as $numero){
                    if($numero < $min){
                        $min = $numero;
                    }
                    
                    if($numero > $max){
                        $max = $numero;
                    }
                }
                
                foreach ($valor as $numero){
                    if($numero == $min){
                        echo "$numero minimo<br>";
                    }else if($numero == $max){
                        echo "$numero maximo<br>";
                    }else{
                        echo "$numero<br>";
                    }
                }
            }
            
        ?>
    </body>
</html>
