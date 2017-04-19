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
         Introduzca la altura de rombo:  
        <form action="romboLleno.php" method="post">
            <input type="number" name="altura" autofocus >
            <input type="submit" value="Continuar">
        </form>
       
       <?php
       //piramide normal
        for($i = 1; $i <= $altura; $i++){
            for($y = $altura; $y >= $i; $y--){
                echo "&nbsp;&nbsp;";
            }
            
            for($j = 0; $j < $i; $j++){
               echo "&nbsp; *";
            }
            
           echo "<br>";
        }
        
        //pirámide inversa
        for($i = $altura; $i >= 1; $i--){
            for($y = $i; $y <= $altura; $y++){      
                echo "&nbsp;&nbsp;";
            }
          
            for($j = $i; $j > 0; $j--){
               echo "&nbsp; *";
            }
            
            echo "<br>";
        }
        ?>
    </body>
</html>