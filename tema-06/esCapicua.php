<!DOCTYPE html>
<!--
Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso
en caso contrario..
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>esCapicua</title>
    </head>
    <body>
        <div>
            <h5>Escribe un número positivo de hasta 5 cifras:</h5>
            <form action="numCapicua.php" method="post">
                <input type="number" name="numero" min="0" max="99999" autofocus>
                <input type="submit" value="Enviar" />
            </form>
        </div>
        <?php
            $numero = $_POST["numero"];
    $capicua = false;
    
    if($numero < 0){
        $capicua = false;
    }
    
    if($numero < 10){
        $capicua = true;
        echo "Número capicua!";    
    } else if (($numero >= 10) && ($numero < 100)){
        if(floor($numero / 10) == ($numero % 10)){
            $capicua = true;
            echo 'Número capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else if (($numero > 100) && ($numero < 1000)){
        if(floor($numero / 100) == ($numero % 10)){
            $capicua = true;
            echo 'Número capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else if (($numero >= 1000) && ($numero < 10000)){
        if ((floor($numero / 1000) == ($numero % 10)) && 
           ((floor($numero / 100) % 10) == (floor($numero / 10) % 10))){
          $capicua = true;
          echo 'Numero capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else if (($numero >= 10000) && ($numero < 100000)){
        if ((floor($numero / 10000) == ($numero % 10)) &&
           (((floor($numero / 1000) % 10)) == (floor( $numero / 10) % 10))){
          $capicua = true;
          echo 'Número capicua';
        }else{
            echo 'Número NO capicua';
        }
    } else {
        echo "Error: No se permiten mas de 5 digitos!";
    }
        ?>
    </body>
</html>
