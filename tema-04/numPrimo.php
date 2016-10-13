<!DOCTYPE html>
<!--
Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.
-->
<html>
    <head>
        <title>Número Primo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Número Primo</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num = $_POST["num"];
            
            if(!isset($num)){
        ?>
        <div>
            <form action="numPrimo.php" method="post">
                <p>Introduce un número positivo:</p>
                <input type="number" name="num" min="0" autofocus>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
            }else{
                $esPrimo = true;
                
                for($i = 2; $i < $num; $i++){
                    if(($num % $i) == 0){
                        $esPrimo = false;
                    }
                }
                
                if(($num == 0) || ($num == 1)){
                    $esPrimo = false;
                }
                
                if($esPrimo){
                    echo 'Número primo!';
                }else{
                    echo 'Número no primo!';
                }
            }
        ?>    
    </body>
</html>
