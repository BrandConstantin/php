<h3>Modificación Palabras</h3>
<?php
    $espaniol = $_POST['espaniol'];
    $ingles = $_SESSION['diccionario'][$espaniol];
?>

<form action="respuestas.php" method="post">
  <input type="hidden" name="ejercicio" value="08_administrarPalabras">
  Español: <input type="text" name="espaniol" value="<?=$espaniol?>" readonly="readonly"><br>
  Inglés: <input type="text" name="ingles" value="<?=$ingles?>" autofocus=""><br>
  <input type="submit" name="accion"  value="Modificar">
</form>