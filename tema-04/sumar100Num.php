<!DOCTYPE html>
<!--
Realiza un programa que sume los 100 números siguientes a un número entero y positivo
introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
positivo).
-->
<html>
    <head>
        <title>Sumar 100 números siguientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Sumar 100 números siguientes</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num = $_POST["num"];
            
            if(!isset($num)){
        ?>
        <div>
            <form action="sumar100Num.php" method="post">
                <p>Introduce un número entero positivo:</p>
                <input type="number" name="num" min="0" autofocus>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
            }else{
                for($i = ($num + 1); $i < ($num + 101); $i++){
                    $sumaI += $i;
                }
                echo "La suma total de los 100 números empezando con $num es de $sumaI";
            }
        ?>    
    </body>
</html>
