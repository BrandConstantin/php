<!DOCTYPE html>
<!--
Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.
-->
<html>
    <head>
        <title>Calcular Potencia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Calcular Potencia</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $base = $_POST["base"];
            $exponente = $_POST["exponente"];
            
            if(!isset($base)){
        ?>
        <div>
            <form action="calcularPotencia.php" method="post">
                <p>Introduce la base:</p>
                <input type="number" name="base" min="1"  autofocus>
                <input tuype="number" name="exponente">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
            }else{
                $potencia = 1;
                
                if($exponente == 0){
                    $potencia = 1;
                }
                
                for($i = 0; $i < $exponente; $i++){
                    $potencia *= $base;
                }

                echo $base, ' ^ ', $exponente, ' = ', $potencia;
            }
        ?>    
    </body>
</html>
