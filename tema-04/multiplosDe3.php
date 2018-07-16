<!DOCTYPE html>
<!--
Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número
leído por teclado.
-->
<html>
    <head>
        <title>Multiplos de 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Multiplos de 3</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
            $digito = $_POST['digito'];
            
            if(!isset($num)){
        ?>
            <form action="multiplosDe3.php" method="post">
                <p>Introduce número:</p>
                <input type="number" name="num" autofocus="" required="" min="3"><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
            }else{
                $cuenta = 0;
                $suma = 0;
                $i = 1;
                
                do{
                    if(($i % 3) == 0){
                        echo "$i    ";
                        $cuenta++;
                        $suma += $i;
                    }
                    $i++;
                }while ($i < $num);
                
                echo "<br>Hay un total de $cuenta números";
                echo "<br>Que suman $suma ";
            }
        ?>
        </div>   
    </body>
</html>