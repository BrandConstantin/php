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
            <form action="numeroReves.php" method="post">
            <p>Introduce altura:</p>
            <input type="number" name="num" autofocus ><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            $num = $_POST['num'];
            
            if(!isset($num)){
                $num = 0;
            }
            
            
        ?>
        </div>   
    </body>
</html>