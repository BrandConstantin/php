<?php
    session_start();
    
    if(isset($_GET['number'])){
        if($_GET['number'] >= 0){
            //los números se guarda en un array
            $_SESSION['numbers'] = $_SESSION['numbers']." ".$_GET['number'];
            $_SESSION['cantidad']++;
            
            //comprueba si los números son primos
            $divisor = 0;
            
            for ($i = 1; $i <= $_GET['number']; $i++) {
                if(($_GET['number'] % $i) == 0){
                    $divisor++;
                }
            }
            
            //guarda los primos en un array y los no primos en otro array
            if($divisor <= 2){
                $_SESSION['primos'] = $_SESSION['primos']." ".$_GET['number'];
            }else{
                $_SESSION['noPrimos'] = $_SESSION['noPrimos']." ".$_GET['number'];
            }
        }else{
            $_SESSION['terminado'] = TRUE;
        }
        
    }else{
        $_SESSION['numbers'] = "";
        $_SESSION['primos'] = "";
        $_SESSION['noPrimos'] = "";
        $_SESSION['cantidad'] = 0;
        $_SESSION['terminado'] = FALSE;
    }
?>
<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números positivos por teclado y que los vaya almacenando en un
array. La introducción de números termina cuando el usuario mete un número negativo. Por tanto, a priori,
el programa no sabe cuántos números introducirá el usuario. El último número introducido (el negativo) se
desprecia. A continuación se debe mostrar el contenido de ese array junto al índice.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Número primos y no primos</title>
        <style>
            table, tr, td{
                border: 1px solid appworkspace;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        if(!$_SESSION['terminado']){
        ?>
        <h1>Introduce números positivos</h1>
        <p>El programa finaliza cuando se introduce un número negativo</p>
        <form action="PrimosFinal.php" method="get">
            <label>Introduce número:</label>
            <input type="number" name="number" autofocus="" value="number">
            <input type="submit" value="Enviar">
        </form>
        <?php
        }else{
            //explota las cadenas

            //original
            $cadenaNum = $_SESSION['numbers'];
            $cadenaNum = substr($cadenaNum, 1);
            $cadenaNum = explode(" ", $cadenaNum);

            //primos
            $cadenaPrimos = $_SESSION['primos'];
            $cadenaPrimos = substr($cadenaPrimos, 1);
            $cadenaPrimos = explode(" ", $cadenaPrimos);

            //noPrimos
            $cadenaNoPrimos = $_SESSION['noPrimos'];
            $cadenaNoPrimos = substr($cadenaNoPrimos, 1);
            $cadenaNoPrimos = explode(" ", $cadenaNoPrimos);
            
            //mezcla los primos con no primos en un nuevo array
            $valueMezcla;
            $i = 0;
            
            foreach ($cadenaNoPrimos as $value) {
                $valueMezcla[$i] = $value;
                $i++;
            }
            
            foreach ($cadenaPrimos as $value) {
                $valueMezcla[$i] = $value;
                $i++;
            }           
            
            //muestra el array original
            echo 'ARRAY ORIGINAL<br>';
            echo '<table>';
                for($i = 0; $i < 2; $i++){
                    echo '<tr>';

                    if($i == 0){
                        for ($j = 0; $j < $_SESSION['cantidad']; $j++) {
                            echo "<td>$j</td>";
                        }
                    }else{
                        foreach ($cadenaNum as $value) {
                            echo '<td>'.$value.'</td>';
                        }
                    }

                    echo '</tr>';
                }

            echo '</table>';
            
            //muestra el array ordenado
            echo '<br><br><br><br><br><br>';
            echo 'ARRAY ORDENADO<br>';
            echo '<table>';
                for($i = 0; $i < 2; $i++){
                    echo '<tr>';

                    if($i == 0){
                        for($j = 0; $j < $_SESSION['cantidad']; $j++){
                            echo "<td>$j</td>";
                        }
                    }else{
                        foreach ($valueMezcla as $value) {
                            echo '<td>'.$value.'</td>';
                        }
                    }

                    echo '</tr>';
                }

            echo '</table>';
        }
        ?>
    </body>
</html>
