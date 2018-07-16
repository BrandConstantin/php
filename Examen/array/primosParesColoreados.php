<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
   <body>
<?php
      $numero = $_GET['numero'];
      $contadorNumeros = $_GET['contadorNumeros'];
      $numeroTexto = $_GET['numeroTexto'];

      if (!isset($numero)) {
        $contadorNumeros = 0;
        $numeroTexto = "";
      }    
      
      // Muestra los números introducidos
      if ($numero < 0) {
        // añade el último número leído
        $numeroTexto = $numeroTexto . " " . $numero; 
        // quita los dos primeros espacios de la cadena 
        $numeroTexto = substr($numeroTexto, 2);       
        //Añade a la array los números
        $numero = explode(" ", $numeroTexto); 
        
        echo "Los números primos introducidos son: ";
        
        //Compruebo que sean o no primos con
        // Una funcion que recorre todos los numero desde el 2 hasta el valor recibido
        function primo($numeros){
            $contadorNumeros=0;
            for($i=2;$i<=$numeros;$i++){
                if($numeros%$i==0){
                # Si se puede dividir por algun numero mas de una vez, no es primo
                    if(++$contadorNumeros > 1){
                        return false;
                    } 
                }
            }
            return true;
        }
        
        //Los primos los pinto rojos y los no primos los dejo en negro
        for ($i=0; $i<count($numero) -1; $i++){
            if(primo($numero[$i])){
                echo "<font color='blue'>" . $numero[$i] . " " . "</font>"; 
            }else if($numero[$i] % 2 == 0){
                echo "<font color='pink'>" . $numero[$i] . " " . "</font>"; 
            }else{
                echo $numero[$i] . " ";
            }
        }
        
      }else{
  ?>
  <form action="#" method="get">
    Introduzca un número:
    <input type="number" name ="numero" autofocus>
    <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros?>">
    <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
    <input type="submit" value="Enviar">
  </form>
<?php
    }
  ?> 
   </body>
</html>