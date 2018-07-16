<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno
leído por teclado que no sean divisibles entre otro también leído de igual forma.
-->
<html>
    <head>
        <title>Números enteros positivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Números enteros positivos</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            if(!isset($num1)){
        ?>
            <form action="numerosEnterosPositivos.php" method="post">
                <p>Introduce número:</p>
                <input type="number" name="num1" autofocus="" required="" min="0" ><br>
                <p>Introduce otro número más pequeño:</p>
                <input type="number" name="num2" autofocus="" required="" min="0" ><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
            }else{
                $cuenta = 0;
                $suma = 0;
                
                echo "Los números enteros positivos menores que $num1";
                echo " que son divisible entre $num2 son:<br>";
                
                for($i = 1; $i < $num1; $i++){
                    if(($i % $num2) != 0){
                        echo "$i   ";
                    }
                }
            }
        ?>
        </div>   
    </body>
</html>