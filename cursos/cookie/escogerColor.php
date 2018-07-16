<?php
if(isset($_POST['color'])){
    $color = $_POST['color'];
    
    setcookie('color', $color, time() + 10);
}else{
    if(isset($_COOKIE['color'])){
        $color = $_COOKIE['color'];
    }else{
        $color = 'white';
    }
}
?>
<html>
    <head>
        <title>Ejercicio 7</title>
        <meta charset="utf-8">
    </head>
    <body <?php echo "style='background-color:$color'"; ?>>
        <form method="post" action="escogerColor.php">
            <label for="color">Escoge color de fondo</label>
            <select name="color">
                <option value="red">Rojo</option>
                <option value="green">Verde</option>
                <option value="blue">Azul</option>
                <option value="Black">Negro</option>
                <option value="silver">Gris</option>
                <option value="yellow">Amarillo</option>
            </select>
            <input type="submit" value="Cambiar">
        </form>
    </body>
</html>