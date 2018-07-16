<?php
    $num = $_GET['num'];
    
    if(!isset($num) || ($num > 0)){
        $_SESSION['total'] += $num;
        $_SESSION['contadorNum']++;
        
        ?>
        <form action="respuestas.php" method="get">
            <input type="hidden" name="ejercicio" value="01">
            <input type="number" name="num" autofocus="">
            <!--<input type="hidden" name="contadorNum">-->
            <input type="submit" value="Aceptar">
        </form>
        <?php
    }else{
        echo "La media de los números es: ".$_SESSION['total'] / ($_SESSION['contadorNum'] -1);        
        
        session_destroy();
    }
?>