<!DOCTYPE html>
<!--
Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.
-->
<html>
    <head>
        <title>Números primos de 2 a 100</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Números primos de 2 a 100</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
         /*   
            if(!isset($num)){
        ?>
            <form action="numerosPrimosDe2-100.php" method="post">
            <p>Introduce número:</p>
            <input type="number" name="num" autofocus ><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            }else{*/
                for($i = 2; $i <= 100; $i++){
                    $primo = true;
                    for($j = 2; $j < $i; $j++){
                        if(($i % $j) == 0){
                            $primo = false;
                        }
                    }
                    
                    if($primo){
                        echo $i, ' - ';
                    }
                }
            //}
        ?>
        </div>   
    </body>
</html>