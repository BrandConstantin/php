<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            
            $numero = $_GET['numero'];
            $contador = $_GET['contador'];
            $numTexto = $_GET['numTexto'];
            $min = PHP_INT_MAX;
            $max = -PHP_INT_MAX;
            $capicua = 0;
            
            if(!isset($numero)){
                $contador = 0;
                $numTexto = "";
            }
            
            if($contador < 10 || !isset($numero)){
                $contador++;
                
                ?>
            <form action="#" method="get">
                Introduce un número
                <input type="number" name="numero" autofocus/>
                <input type="hidden" name="contador" value="<?= $contador ?>"/>
                <input type="hidden" name="numTexto" value="<?= $numTexto . " " . $numero ?>"/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
            }else{
                $numTexto = $numTexto." ".$numero;
                $numTexto = substr($numTexto, 2);
                $numero = explode(" ", $numTexto);
                
                foreach ($numero as $value) {
                    if($value < $min){
                        $min = $value;
                    }else if($value > $max){
                        $max = $value;
                    }else{
                        $value = $value;
                    }
                    
                    if($value == strrev($value)){
                        $capicua++;
                    }
                }
                
                foreach ($numero as $value) {                    
                    if($value == $min){
                        echo $min." minimo";
                    }else if($value == $max){
                        echo $max." maximo";
                    }else{
                        echo $value;
                    }
                    
                    echo "<br>";
                }
                
                echo "<br><br><br><br>";
                echo "Num máximo ".$max."<br>";
                echo "Num minimo ".$min."<br>";
                echo "Num capicua ".$capicua."<br>";
            }
            
        ?>
    </body>
</html>