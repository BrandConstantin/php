<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo.
-->
<html>
    <head>
        <title>Media Impares Y Mayor Par</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Media Impares Y Mayor Par</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
        <?php
            $num = $_POST['num'];
            $contarNumeros = $_POST['contarNumeros'];
            $sumaImpares = $_POST['sumaImpares'];
            $totalImpares = $_POST['totalImpares'];
            $mayorPar = $_POST['mayorPar'];
            
            //formula para ver los valores que envia el formulario
            //var_dump(get_defined_vars());
            
            //se inicializan
            if(!isset($num)){
                $contarNumeros = 0;
                $totalImpares = 0;
                $sumaImpares = 0;
                $mayorPar = -2;
            }
            
            if ($num > 0){
                $contarNumeros++;

                if (($num % 2) == 0){
                    if ($num > $mayorPar){
                        $mayorPar = $num;
                    }
                }else{
                        $totalImpares++;
                        $sumaImpares += $num;
                    }
            }
            
            if((!isset($num)) || ($num > 0)){
        ?>
        <form action="mediaImparesMayorPar.php" method="post">
            <p>Introduce número:</p>
            <input type="number" name="num" autofocus ><br>
            <input type="hidden" name="contarNumeros" value="<?= $contarNumeros; ?>"><br>
            <input type="hidden" name="sumaImpares" value="<?= $sumaImpares; ?>"><br>
            <input type="hidden" name="totalImpares" value="<?= $totalImpares; ?>"><br>
            <input type="hidden" name="mayorPar" value="<?= $mayorPar; ?>"><br>
            <input type="submit" value="Aceptar">
        </form>
            
        <p>(El programa finaliza introduciendo un número negativo)</p>
        <?php
            }
            
            if($num < 0){
                $media = $sumaImpares / $totalImpares;
                
                echo "Se han introducido un total de ", $contarNumeros, " números <br>";
                echo "La media de los impares es ", $media, "<br>";
                echo "El mayor de los pares es $mayorPar";
            }
        ?>
        </div>   
    </body>
</html>