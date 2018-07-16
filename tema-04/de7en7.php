<!DOCTYPE html>
<!--
Escribe un programa que obtenga los números enteros comprendidos entre dos números introduci-
dos por teclado y validados como distintos, el programa debe empezar por el menor de los enteros
introducidos e ir incrementando de 7 en 7.
-->
<html>
    <head>
        <title>De 7 en 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>De 7 en 7</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
            if(!isset($num1) || ($num1 == $num2)){
        ?>
        <div>
            <form action="de7en7.php" method="post">
                <p>Introduce un número entero positivo:</p>
                <input type="number" name="num1" min="0" autofocus>
                <br>
                <p>Introduce otro número entero positivo:</p>
                <input type="number" name="num2" min="0" autofocus>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
            }else{
                if($num1 > $num2){
                    $aux = $num1;
                    $num1 = $num2;
                    $num2 = $aux;
                }
                
                for($i = $num1; $i <= $num2; $i += 7){
                    echo "$i <br>";
                }
            }
        ?>    
    </body>
</html>
