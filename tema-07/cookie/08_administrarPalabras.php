<h3>Administración de palabras</h3>
<?php
    if($_POST['accion'] == 'Alta Palabra'){
        $_SESSION['diccionario'][$_POST['espaniol']] == $_POST['ingles'];
    }

    if($_POST['accion'] == 'Modificar Palabra'){
        $_SESSION['diccionario'][$_POST['espaniol']] == $_POST['ingles'];
    }
    
    if($_POST['accion'] == 'Eliminar Palabra'){
        unset($_SESSION['diccionario'][$_POST['espaniol']]);
        setcookie($_POST['espaniol'], NULL, -1);
    }
    
    $diccionario = $_SESSION['diccionario'];
    
    echo "<table>";
    
    foreach ($diccionario as $espaniol => $ingles){
?>
   <tr><td><?=$espaniol?></td><td><?=$ingles?></td><td>
    <form action="respuestas.php" method="post">
      <input type="hidden" name="ejercicio" value="08_administrarPalabras">
      <input type="hidden" name="espaniol" value="<?=$espaniol?>">
      <input type="submit" name="accion" value="Eliminar">
    </form>
    </td><td>
    <form action="respuestas.php" method="post">
      <input type="hidden" name="ejercicio" value="08_modificarPalabras">
      <input type="hidden" name="espaniol" value="<?=$espaniol?>">
      <input type="submit" value="Modificar">
    </form>
    </td></tr>
<?php
    }
?>

</table>

<hr><table><tr>
<td>
    <form action="respuestas.php" method="post">
  <input type="hidden" name="ejercicio" value="08_altaPalabra">
  <input type="submit" value="Alta Palabra">
</form>
</td>
<td>
    <form action="respuestas.php" method="post">
  <input type="hidden" name="ejercicio" value="08">
  <input type="hidden" name="accion" value="borrarC">
  <input type="submit" value="Borrar todo">
</form>
</td>
<td>
    <form action="respuestas.php" method="post">
  <input type="hidden" name="ejercicio" value="08">
  <input type="hidden" name="accion" value="actualizarC">
  <input type="submit" value="Guardar cambios">
</form>
</td>

</tr></table>   