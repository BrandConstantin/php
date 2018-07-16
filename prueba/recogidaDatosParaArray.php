<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno
leído por teclado que no sean divisibles entre otro también leído de igual forma.
-->
<html>
    <head>
        <title>Recogida datos para un array mediante formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Recogida datos para un array mediante un formulario</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num1 = $_POST['num1'];
            $contadorNumeros = $_POST['contadorNumeros'];
            $numeroTexto = $_POST['numeroTexto'];
            
            if(!isset($num)){
                $contadorNumeros = 0;
                $numeroTexto = "";
            }
            
            if($contadorNumeros == 6){
                //añadir el ultimo número leido
                $numeroTexto = $numeroTexto." ".$num;
                //quitar los dos primeros espacios de la cadena
                $numeroTexto = substr($numeroTexto, 2);
                $numero = explode(" ", $numeroTexto);
                
                echo "Los números introducidos son: ";
                foreach($numero as $num){
                    echo "$num  ";
                }
            }
            
            //pide un número y añade el actual
            if(($contadorNumeros < 6) || (!isset($num))){
        ?>
            <form action="#" method="post">
                <p>Introduce número:</p>
                <input type="number" name="num" autofocus="" required="" min="0" ><br>
                <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros; ?>"><br>
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto." ".$num; ?>"><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
            }
        ?>
        </div>   
    </body>
</html>