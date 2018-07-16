<?php
    session_start();
    
    if(!isset($_SESSION['A'])){
        $_SESSION['A'] = 0;
    }
    
    if(!isset($_SESSION['B'])){
        $_SESSION['B'] = 0;
    }
?>

<!DOCTYPE html>
<!--
ejemplo sesión
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sesiones</title>
    </head>
    <body>
        <?php
        switch ($_POST['accion']){
            case "incrementaA":
                $_SESSION['A']++;
                break;
            case "decrementaA":
                $_SESSION['A']--;
                break;
            case "incrementaB":
                $_SESSION['B']++;
                break;
            case "decrementaB":
                $_SESSION['B']--;
                break;
            case "cierra":
                session_destroy();
                header("refresh: 0;");
        }
        ?>
        
        <h1>
            a = <?php echo $_SESSION['A'] ?><br>
            b = <?php echo $_SESSION['B'];?>
        </h1>
        
        <form action="#" method="POST">
            <select name="accion">
                <option value="incrementaA">A++</option>
                <option value="decrementaA">A--</option>
                <option value="incrementaB">B++</option>
                <option value="decrementaB">B--</option>
                <option value="cierra">Cierra sesión</option>
            </select>
            <input type="submit" value="OK">
        </form>
    </body>
</html>
