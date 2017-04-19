<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            
            $altura = $_POST['altura'];
        ?>
        Introduzca la altura de la piramide:  
        <form action="piramideLlena.php" method="post">
            <input type="number" name="altura" autofocus >
            <input type="submit" value="Continuar">
        </form>
        <?php
        for ($index = 1; $index < $altura; $index++) {
                echo "&nbsp;";   
            for ($index1 = ($altura + 1); $index1 >= $index; $index1 -= 2) {
                echo "&nbsp;";   
            }
            
            for ($index2 = 0; $index2 < $index; $index2++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </body>
</html>