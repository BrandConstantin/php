<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            
            if(!isset($_GET['numero'])){
                $contador = 1;
                $numTexto = "";
            }else{
                $contador = $_GET['contador'];
                $numTexto = $_GET['numTexto'];
            }
            
            if($contador < 11){
                $numero = $_GET['numero'];
                $contador = $_GET['contador'];
                $numTexto = $_GET['numTexto'];
                
                if($numTexto == ""){
                    $numTexto = $numero;
                }else{
                    $numTexto = $numTexto." ".$numero;
                }
                
                $contador++;
            }
            
            if(!isset($_GET['numero']) || ($contador < 11)){
                ?>
            <form action="#" method="get">
                Introduzca un precio:
                <input type="number" name ="numero" autofocus="" required="">
                <input type="hidden" name="contador" value="<?php echo $contador; ?>">
                <input type="hidden" name="numTexto" value="<?php echo $numTexto; ?>">
                <input type="submit" value="Enviar">
              </form>
        <?php
            }
            
            //mostrar los 10 números introducidos
            if($contador == 11){
                $numero = explode(" ", $numTexto);
                
                //mostrar el array
                for ($index = 0; $index < count($numero); $index++) {
                    echo $numero[$index]." €<br>";
                }
                
                //pedimos los precios
                ?>
                <form action="#" method="get">
                    Introduzca un descuento:
                    <input type="number" name ="descuento" min="0" max="100" autofocus="" required="">
                    <input type="hidden" name="contador" value="12">
                    <input type="hidden" name="numero" value="numero">
                    <input type="hidden" name="numTexto" value="<?php echo $numTexto; ?>">
                    <input type="submit" value="Enviar">
                </form>
        <?php
            }
            
            //como hemos introducido números < 11 más el descuento son en total 12 posiciones
            if($contador == 12){
                $descuento = $_GET['descuento'];
                
                if($descuento < $numero[$i]){
                    echo "Los datos introducidos son correctos";
                }else{
                    $numero = explode(" ", $numTexto);
                    
                    //mostrar el array
                    for ($index = 0; $index < count($numero); $index++) {
                        echo $numero[$index]." €<br>";
                    }
                    echo '<br><br>';
                    
                    echo 'Descuento del: '.$descuento." %";
                    echo "<br><br>";
                    
                    for ($index1 = 0; $index1 < count($numero); $index1++) {
                        if($numero[$i] < $descuento){
                            $descuentoAplicado = $numero[$index1] * $descuento / 100;
                            
                            $resultado = $numero[$index1] - $descuentoAplicado;
                            
                            echo "Precio: ".$numero[$index1]." € <br>";
                            echo $descuentoAplicado." % descuento aplicado <br>";
                            echo "Resultado ".$resultado." € <br>";
                            echo ".....................<br>";
                        }else{
                            echo "<br>El precio ".$numero[$index1]. " € es inferior al descuento ".$descuento." %";
                        }
                    }
                }
            }
        ?>
    </body>
</html>