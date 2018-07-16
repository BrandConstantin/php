<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $altura = $_POST['altura']; 
       ?> 
        
        Introduzca la altura de rombo:   
        <form action="romboVacio.php" method="post">
            <input type="number" name="altura" autofocus >
            <input type="submit" value="Continuar">
        </form>
       
       <?php
       $alt = $altura / 2;
       $i = 0;
       $y = 0;
  
       for ($i = 1; $alt >= $i; $i++){
           for($y = $i; $alt >= $y; $y++){
            echo "&nbsp;";
           }
           
           for ($y = 1; ($i * 2 - 1) >= $y; $y++){
               if ($y == 1 || ($i * 2 - 1) == $y){
                   echo "*";
               }else{
                    echo "&nbsp;";
                   }
           }
           echo "<br>";   
       }
       
       for ($i = $alt; $i >= 1; $i--){
           for ($y = $i; $alt >= $y; $y++){
                echo "&nbsp;";
           }
           
           for($y = 1; ($i * 2 - 1) >= $y; $y++){
               if($y == 1||($i * 2 - 1) == $y){
                   echo "*";
               }else{
                   echo "&nbsp;";
                }
                echo "<br>";
            } 
             
            $espacios = $alt / 2;
            $altura = 1;
            $espaciosInteriores = 0;

            // Parte de arriba
            while ($altura <= $alt / 2) {
                // inserta espacios
                for ($i = 1; $i <= $espacios; $i++){
                    echo "&nbsp;";
                }
                
                // parte central
                for ($i = 1; $i < $espaciosInteriores; $i++){
                    echo "&nbsp;";
                
                    if ($alturaI > 1){
                        echo "*";
                    }
                    
                    echo "<br>";
                }
                
                $alturaI++;
                $espacios--;
                $espaciosInteriores+=2;
            }

            // Parte de abajo
            while ($alturaI <= $alt) {
                // inserta espacios
                for ($i = 1; $i <= $espacios; $i++){
                    echo "&nbsp;";
                }
            }
       }
        ?>
    </body>
</html>