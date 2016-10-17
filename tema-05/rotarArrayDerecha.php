<!DOCTYPE html>
<!-- Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rotar array derecha</title>
    </head>
    <body>
        <?php
            $numero = $_GET["numero"];
            $contadorNumeros = $_GET["contadorNumeros"];
            $numeroTexto = $_GET["numeroTexto"];  
                        
            if(!isset($numero)){
                $contadorNumeros = 0;
                $numeroTexto = " ";
            }
            
            if($contadorNumeros == 4){
                $numeroTexto = $numeroTexto." ".$numero;
                $numeroTexto = substr($numeroTexto, 2);
                
                $valor = explode(" ", $numeroTexto);
                
                echo '<table><tr>';
                
                for($i = 0; $i < 4; $i++){
                    echo "<td>$i</td>";
                }
                
                echo '</tr><tr>';
                
                for($i = 0; $i < 4; $i++){
                    echo "<td>.$valor[$i].</td>";
                }
                
                echo '</tr></td>';
                
            }
            
            if(($contadorNumeros < 4) || (!isset($numero))){
        ?>
        <form action="rotarArrayDerecha.php" method="get">
            Introduzca un número:
            <input type="number" name ="numero" autofocus>
            <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
            <input type="hidden" name="numeroTexto" value="<?= $numeroTexto." ".$n ?>">
            <input type="submit" value="OK">
        </form>
        <?php
            } 
        ?>        
    </body>
</html>
