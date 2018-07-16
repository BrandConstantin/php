<!DOCTYPE html>
<!--
Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario.
-->
<html>
    <head>
        <title>Dibujar Piramide</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Dibujar Piramide</h1>
        <hr style="border-style: dotted 1px #f34">
        <?php
            $altura = $_POST["altura"];
            $caracter = $_POST["caracter"];
            
            if(!isset($altura)){
        ?>
        <div>
            <form action="piramide.php" method="post">
                <p>Introduce la altura:</p>
                <input type="number" name="altura" min="4" max="15" autofocus>
                <br>
                <p>Introduce carácter a dibujar:</p>
                <input type="text" name="caracter" >
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        
        <?php
            }else{                
                for($i = 1; $i <= $altura; $i++){
                    for($espacios = 0; $espacios <= ($altura - $i); $espacios++){
                        echo "  ";
                    }
                    
                    for($k = 1; $k <= $i; $k++){
                        echo '  ', $caracter;
                    }
                    
                    echo '<br>';
                }
            }
        ?>    
    </body>
</html>
