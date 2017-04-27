<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números positivos por teclado y que los vaya almacenando en un
array. La introducción de números termina cuando el usuario mete un número negativo. Por tanto, a priori,
el programa no sabe cuántos números introducirá el usuario. El último número introducido (el negativo) se
desprecia. A continuación se debe mostrar el contenido de ese array de tal forma que los múltiplos de 5
deben salir en rojo, los múltiplos de 2 en verde; los que sean al mismo tiempo múltiplos de 5 y de 2 en azul
y el resto de números en negro
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            
            $numIntro = $_GET['numIntro'];
            $numeros = $_GET['numeros'];
            $contador = $_GET['contador'];            
             
            if (!isset($numIntro)) {
                $contador = 0;//para que el campo ++numeros sea 0
                $numeros = "";
            }
             
            if ($numIntro < 0) {
                $numeros = substr($numeros, 2);
                 
                $numIntro = explode("-", $numeros);
                $arrayFinal = new SplFixedArray(count($numIntro));
                 
                foreach ($numIntro as $numeros) {
                     
                    for ($i = 0; $i < count($numeros); $i++) {
                         
                        if (($numeros % 2 == 0) && ($numeros % 5 == 0) ) {
                            $arrayFinal = $numeros;
                            echo "<span style=\"color: blue\"> $arrayFinal</span>";
                        }else if ($numeros % 5 == 0){
                            $arrayFinal = $numeros;
                            echo "<span style=\"color: red\"> $arrayFinal</span>";
                        }else if( $numeros % 2 == 0 ){
                            $arrayFinal = $numeros;
                            echo "<span style=\"color: green\"> $arrayFinal</span>";
                             
                        } else {
                            $arrayFinal = $numeros;
                            echo " $arrayFinal ";
                        }
                    }
                }
                
            } else {
             
        ?>
        <form action="multiplos.php" method="get">
            Introduzca un número: <input type="number" name="numIntro" autofocus>
            <input type="hidden" name="numeros" value="<?= $numeros . "-" . $numIntro ?>">
            <input type="hidden" name="contador" value="<?= $contador++ ?>">
            <input type="submit" value="Introducir">
        </form>
        <?php
            }
        ?>
    </body>
</html>