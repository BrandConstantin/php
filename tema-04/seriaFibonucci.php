<!DOCTYPE html>
<!--
Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe
introducir por teclado.
-->
<html>
    <head>
        <title>Seria Fibonacci</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Seria Fibonaccio</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $num = $_POST["num"];
            
            if (!isset($num)){              
        ?>
        <div>
            <form action="seriaFibonucci.php" method="post">
                <p>Introduce un número positivo:</p>
                <input type="number" name="num"  autofocus>
                <input type="submit" value="Enviar">
            </form>
        </div>
        
        <?php
            }else{
                $i = 1; 
                $num1= 0;
                $num2 = 1;
                
                $suma;
                
                do{
                    if($num == 1){
                        echo $num1;
                    }else{
                        echo $num1, ' ';
                        
                        do{
                            $suma = $num1 + $num2;
                            echo $num2, ' ';
                            $num1 = $num2;
                            $num2 = $suma;
                        }while($i++ < ($num - 1));
                    }
                }while ($i < $num);
            }
        ?>
        </table>
    </body>
</html>
