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
            <form action="piramide2.php" method="post">
                <p>Introduce la altura:</p>
                <input type="number" name="altura" min="4" max="15" autofocus>
                <br>
                <p>Escoge carácter a dibujar:</p>
                <select name="caracter">
                    <?php
                        $caracter = array("·" => "punto", "$" => "dolar", "#" => "almohadilla", 
                            "%" => "porcentaje", "&" => "amper", "*" => "estrella");
                        
                        foreach ($caracter as $clave => $valor){
                    ?>
                    <option value="<?php echo $clave; ?>" style="<?php echo $clave; ?>">
                        <?php echo $valor; ?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
        
        <?php
            }else{                
                $alturaPiramide = 1;
                $espacios = $altura - 1;
                
                while($alturaPiramide <= $altura){
                    //inserta espacios
                    for($i = 1; $i <= $espacios; $i++){
                        echo $caracter;
                    }
                    
                    //pinta la linea
                    for($i = 1; $i < altura * 2; $i++){
                        echo $caracter;
                    }
                    
                    echo '<br>';
                    
                    $alturaPiramide++;
                    $espacios--;
                }
            }
        ?>    
    </body>
</html>
