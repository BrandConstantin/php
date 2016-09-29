<!DOCTYPE html>
<!--
adivinar número
-->
<html>
    <head>
        <title>Adivinar número</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        Adivina el número!
        <hr style="border-style: dotted 1px #f34">
        <?php
            $numIntrod = $_POST["numIntrod"];
            $oportunidades = $_POST["oportunidades"];
            $numSecreto = 24;
            
            if($numIntrod == $numSecreto){
                echo 'Enhorabuena has adivinado';
            }else{
                if($oportunidades == 0){
                    echo 'Lo siento, se te han acabado las oportunidades<br>';
                }else{
                    if($numIntrod != 555){
                        if($numSecreto > $numIntrod){
                            echo 'El número es mayor que el introducido<br>';
                        }else{
                            echo 'El número es menor que el introducido<br>';
                        }
                    }
                    ?>
                    Te quedan <?= $oportunidades-- ?> oportunidades. <br>
                    Introduce otro número:
                    <form action="ejemplo8.php" method="post">
                        <input type="text" name="numIntrod">
                        <input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
                        <input type="submit" name="Continuar">
                    </form>
                    <?php
                }
            }
        ?>
    </body>
</html>
