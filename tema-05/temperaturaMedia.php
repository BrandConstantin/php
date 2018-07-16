<!DOCTYPE html>
<!-- 
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Temperatura Media </title>
    </head>
    <body>
        <?php   
            if(!isset($_GET['temperatura'])){
                $mes = array ("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO",
                "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
        ?>
                Introduce la temperatura media de cada mes:
                <form action="temperaturaMedia.php" method="get">
                    <?php
                        for($i = 0; $i < 12; $i++){
                            echo "$mes[$i]: <input type=\"number\" name=\"temperatura[$mes[$i]]\" <br>";
                        }
                    ?>
                    <input type="submit" value="OK">
                </form>
        <?php
            }else{
                $temperatura = $_GET["temperatura"];
                
                echo '<table';
                foreach ($temperatura as $mes => $tempMes){
                    echo "<tr><td>$mes</td><td>";
                    //pintar
                    for($i = 0; $i < $tempMes; $i++){
                        echo '##</td>';
                    }
                    
                    echo "<td>".$tempMes."ºc</td></tr><br>";
                }
                echo '</table>';
            }
        ?>
    </body>
</html>