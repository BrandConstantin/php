<?php
    $num = $_POST['num']  ;
    
    if(isset($num)){
        $_SESSION['contadorNum']++;
        $_SESSION['suma'] += $num;
    }
    
    if(($_SESSION['suma'] <= 10000) || (!isset($num))){
        ?>
            <form action="respuestas.php" method="post">
                <p>Introduce número:</p>
                <input type="hidden" name="ejercicio" value="03">
                <input type="number" name="num" autofocus ><br>
                <input type="submit" value="Aceptar">
            </form>
        <?php
        //var_dump(get_defined_vars());
    }
        
        if($_SESSION['suma'] >= 10000){
            echo "Se han introducido un total de ".$_SESSION['contadorNum']." números<br>";
            echo 'La media de los números es '.round($_SESSION['suma'] / $_SESSION['contadorNum']).'<br>';
            echo 'Y la suma es de '.$_SESSION['suma'];
        }
?>