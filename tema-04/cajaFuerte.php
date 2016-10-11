<!DOCTYPE html>
<!--
Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <title>Acceso caja fuerte</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Abre al caja fuerte!</h1>
        <hr style="border-style: dotted 1px #f34">
        
        <?php
            $numAcceso = $_POST["numAcceso"];
            $oportunidades = $_POST["oportunidades"];
            $numSecreto = 7364;
            
            if($numAcceso == $numSecreto){
                echo 'Enhorabuena has abierto la caja fuerte';
            }else{
                if($oportunidades == 0){
                    echo 'Lo siento, se te han acabado las 4 oportunidades!';
                }else{
                    if($numAcceso != 0000){
                        if($numAcceso > $numSecreto){
                            echo 'Introduce un número menor';
                        }else{
                            echo 'Introduce un número mayor';
                        }
                    }
                ?>
                <p>Te quedan <?= $oportunidades-- ?> oportunidades. </p><br>
                <p>Introduce otro número:</p>
                <form action="cajaFuerte.php" method="post">
                    <input type="number" name="numAcceso" min="1000" max="9999">
                    <!--Se inicializa solo de forma abritaria con el valor 222, luego
                    el valor se pierde-->
                    <input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
                    <input type="submit" value="Enviar">
                </form>
                <?php
                }
            }
        ?>
    </body>
</html>
