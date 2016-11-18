<?php
    session_start();

    if(isset($_GET['numIntrod'])){
        if($_GET['numIntrod'] >= 0){
            //guardar números en array
            $_SESSION['arrayNum'] = $_SESSION['arrayNum']." ".$_GET['numIntrod'];
            $_SESSION['contador']++;

            //verifica si es primo o no
            $divisores = 0;

            for($i = 1; $i <= $_GET['numIntrod']; $i++){
                if(($_GET['numIntrod'] % $i) == 0){
                    $divisores++;
                }
            }

            //guardar números en dos sesiones diferentes, una primos y otra de no primos
            if($divisores <= 2){
                $_SESSION['primos'] = $_SESSION['primos']." ".$_GET['numIntrod'];
            }else{
                $_SESSION['noPrimos'] = $_SESSION['noPrimos']." ".$_GET['numIntrod'];
            }
        }else{
            $_SESSION['numIntrodNegativo'] = true;
        }
    }else{
        $_SESSION['arrayNum'] = "";
        $_SESSION['primos'] = "";
        $_SESSION['noPrimos'] = "";
        $_SESSION['numIntrodNegativo'] = false;
        $_SESSION['contador'] = 0;
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
        <title>Introducir números en un array</title>
    </head>
    <body>
        <?php
            if(!$_SESSION['numIntrodNegativo']){
        ?>
        <form action="introdNumArray.php" method="get">
            Introduzca número:<input type="number" name="numIntrod" autofocus="">
            <input type="submit" value="Ok">
        </form>
        <?php
            }else{
                //numeros originales
                $numeros = $_SESSION['arrayNum'];
                $numeros = substr($numeros, 1);
                $numeros = explode(" ", $numeros);
                //números primos
                $primos = $_SESSION['primos'];
                $primos = substr($primos, 1);
                $primos = explode(" ", $primos);
                //números no primos
                $noPrimos = $_SESSION['noPrimos'];
                $noPrimos = substr($noPrimos, 1);
                $noPrimos = explode(" ", $noPrimos);
                
                //mezclar números en un nuevo array
                $nuevoArrayNum;
                $j = 0;
                
                foreach ($primos as $num){
                    $nuevoArrayNum[$j] = $num;
                    $j++;
                }
                
                foreach ($noPrimos as $num){
                    $nuevoArrayNum[$j] = $num;
                    $j++;
                }
                
                //mostrar array original
                echo 'Array original<br>';
                echo '<table>';
                
                for($i = 0; $i < 2; $i++){
                    echo '<tr>';
                    if($i == 0){
                        for($j = 0; $j < $_SESSION['contador']; $j++){
                            echo '<td>'.$j.'</td>';
                        }
                    }else{
                        foreach ($numeros as $num){
                            echo "<td>$num</td>";
                        }
                    }
                    
                    echo '</tr>';
                }
                
                echo '</table>';
                
                echo 'Array nuevo<br>';
                echo '<table>';
                
                for($i = 0; $i < 2; $i++){
                    echo '<tr>';
                    if($i == 0){
                        for($j = 0; $j < $_SESSION['contador']; $j++){
                            echo '<td><span style=\"color: green;\">'.$j.'</span></td>';
                        }
                    }else{
                        foreach ($nuevoArrayNum as $num){
                            echo "<td><span style=\"color: red;\">$num</span></td>";
                        }
                    }
                    
                    echo '</tr>';
                }
                
                echo '</table>';
            }
        ?>
    </body>
</html>
