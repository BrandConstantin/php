<!DOCTYPE html>
<?php 
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ExpoCoches</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="hidden" name="zona" value="<?=$_POST["zona"]?>">
            <h4>¿Tiene Entrara Reservada?</h4>
            <input type="submit" name="compra" value="No">
        </form>
        <form action="index.php" method="post">
            Nombre persona que ha echo la reserva: 
            <input type="text" name="nombre" required>
            <input type="hidden" name="zona" value="<?=$_POST["zona"]?>">
            <input type="submit" name="compraReservada" value="Si">
        </form>
    </body>
</html>

