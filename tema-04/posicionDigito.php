<!DOCTYPE html>
<!--
Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe
dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número
introducido
-->
<html>
    <head>
        <title>Posición digito</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Posición digito</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
            $digito = $_POST['digito'];
            
            if((!isset($num)) || (!isset($digito))){
        ?>
            <form action="posicionDigito.php" method="post">
                <p>Introduce número:</p>
                <input type="number" name="num" autofocus="" required=""><br>
                <p>Introduce la posición:</p>
                <input type="number" name="digito" autofocus="" required=""><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
            }
            
            $volteado = 0;
            $posicion = 1;
            $contadorDigitos = 0;
            $numero = $num;
            
            if($numero == 0){
                $contadorDigitos = 1;
            }
            
            while($num > 0){
                $volteado = ($volteado * 10) + ($num % 10);
                $num = floor($num / 10);
                $contadorDigitos++;
            }
            
            while($volteado > 0){
                if(($volteado % 10) == $digito){
                    echo "El digito esta en la posición $posicion <br>";
                }
                
                $volteado /= floor(10);
                $posicion++;
            }
        ?>
        </div>   
    </body>
</html>