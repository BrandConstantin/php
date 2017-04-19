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
        Introduzca la altura de la piramide invertida:  
        <form action="piramideLlenaInvertida.php" method="post">
            <input type="number" name="altura" autofocus >
            <input type="submit" value="Continuar">
        </form>
        <?php          
       echo "<br>";
         
         for ($index1 = $altura; $index1 >=1; $index1--) {
             for ($index = 0; $index <= $altura; $index++) {
              echo "&nbsp;";                      
            }  
            
            echo "<br>";
            
             for ($index2 = 0; $index2 < $index1; $index2++) {
                echo "&nbsp; *";
            }
        }  
        ?>
    </body>
</html>