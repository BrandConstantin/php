<!DOCTYPE html>
<!--
Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.
-->
<html>
    <head>
        <title>Número reves</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Número reves</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
            
            if(!isset($num)){
        ?>
            <form action="numeroReves.php" method="post">
                <p>Introduce número:</p>
                <input type="number" name="num" autofocus="" required=""><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
            }
            
            $volteado = 0;
            $numero = $num;
            
            while($numero > 0){
                $volteado = ($volteado * 10) + ($numero % 10);
                $numero = floor($numero / 10);
            }
            
            echo "Número: $num <br>";
            echo "Volteado: $volteado";
        ?>
        </div>   
    </body>
</html>