<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
   <body>
       <?php
        error_reporting(E_ALL ^ E_NOTICE);
            
        $codigoMorse = array(
                        "1" => ". _ _ _ _",
                        "2" => ". . _ _ _",
                        "3" => ". . . _ _",
                        "4" => ". . . . _",
                        "5" => ". . . . .",
                        "6" => "_ . . . .",
                        "7" => "_ _ . . .",
                        "8" => "_ _ _ . .",
                        "9" => "_ _ _ _ .",
                        "0" => "_ _ _ _ _",
                      );
           
       if(!isset($_GET['numero'])){
       ?>
    <form action="#" method="get">
        Introduzca un número:
        <input type="number" name ="numero" autofocus>
        <input type="submit" value="Enviar">
    </form>
<?php    
    }else{
        $numero = $_GET['numero'];
        
        echo 'El número introducido es: '.$numero.'<br>';
        
        for($i = 0; $i < (strlen($numero)); $i++){
            //almacenamos los números
            $cifra = $numero[$i];
            //concatenamos los números para mostrar el código correspondiente
            $morse = $morse.$codigoMorse[$cifra];
        }
        
        echo "El código morse corespondiente al número introducido es ".$morse;
    }    
  ?>
   </body>
</html>