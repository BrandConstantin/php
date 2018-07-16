<!DOCTYPE html>
<!--
Escribe un programa que calcule el factorial de un número entero leído por teclado.
-->
<html>
    <head>
        <title>Factorial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Factorial</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
            
            if(!isset($num)){
        ?>
            <form action="factorial.php" method="post">
                <p>Introduce número:</p>
                <input type="number" name="num" autofocus="" required="" min="0" max="100"><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
            }else{
                $factorial = $num;
                
                if($factorial == 0){
                    echo "Factorial de 0: 1 <br>";
                }else{
                    for($i = 1; $i < $num; $i++){
                        $factorial *= $i;
                    }
                    
                    echo "Factorial de $num: $factorial <br>";
                }
            }
        ?>
        </div>   
    </body>
</html>