<!DOCTYPE html>
<!--
Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque
por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente
introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y
el 5, se deberán mostrar 21, 22, 23, 24, 25.
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
                <p>Introduce el exponente:</p>
                <input tuype="number" name="exponente">
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <?php
            }else{
                for($i = 1; $i <= $exponente; $i++){
                    $potencia = 1;
                    $repetidor = $i;
                    
                    for($j = 0; $j < $repetidor; $j++){
                        $potencia *= $base;
                    }
                    if($exponente == 0){
                        $potencia = 1;
                    }

                    echo $base, ' ^ ', $exponente, ' = ', $potencia;
                }
            }
        ?>    
    </body>
</html>
