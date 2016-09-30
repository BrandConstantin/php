<!DOCTYPE html>
<!--
Escribe un programa que ordene tres números enteros introducidos por teclado.
-->
<html>
    <head>
        <title>Ordenar 3 Numeros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Ordenar 3 Numeros</h1>
        <hr style="border-style: dotted 1px #f34">
        <div>
            <form action="ordenar3Numeros.php" method="post">
                <p>Introduce el I número:</p><input type="number" name="num1"><br>
                <p>Introduce el II número:</p><input type="number" name="num2"><br>
                <p>Introduce el III número:</p><input type="number" name="num3"><br>
                <input type="submit" value="Enviar Datos">
            </form>
        </div>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            
            if(($num1 > $num2) && ($num1 > $num3)){
                $bigest = $num1;
            }else if(($num2 > $num1) && ($num2 > $num3)){
                $bigest = $num2;
            }else{
                $bigest = $num3;
            }
            
            if(($num1 < $num2) && ($num1 < $num3)){
                $small = $num1;
            }else if(($num2 < $num1) && ($num2 < $num3)){
                $small = $num2;
            }else{
                $small = $num3;
            }
            
            if(($bigest == $num1) && ($small == $num3)){
                $midle = $num2;
            }else if(($bigest == $num1) && ($small == $num2)){
                $midle = $num3;
            }else if(($bigest == $num2) && ($small == $num1)){
                $midle = $num3;
            }else if(($bigest == $num2) && ($small == $num3)){
                $midle = $num1;
            }else if(($bigest == $num3) && ($small == $num2)){
                $midle = $num1;
            }else if(($bigest == $num3) && ($small == $num1)){
                $midle == $num2;
            }
            
            echo 'Los números ordenador son: ', $small, ", ", $midle, ", ", $bigest;
        ?>
    </body>
</html>
