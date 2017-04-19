<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números positivos por teclado y que los vaya
almacenando en un array. La introducción de números termina cuando el usuario mete un
número negativo. Por tanto, a priori, el programa no sabe cuántos números introducirá el
usuario. El último número introducido (el negativo) se desprecia. A continuación se debe
mostrar el contenido de ese array junto al índice. Seguidamente el programa debe colocar en
otro array el sumatorio de los números del array original desde la posición 0 hasta la posición
i tal como se muestra en el ejemplo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $numero = $_GET['numero'];
        $contador = $_GET['contador'];
        $texto = $_GET['texto'];
        // añade el último número leído
        $texto = $texto . " " . $numero;        
        
        if (!isset($numero)) {
          $contador = 0;
          $texto = " ";
        }
        
        if ($numero < 0) {
          $contador++;

          $texto = substr($texto, 2);
          $numero = explode(" ", $texto);
         
          echo "<p>Array original</p>";
          
          //indice del array
          echo "<table><tr>";
          // muestra índice de array
          for ($i = 0; $i < (count($numero) - 1); $i++) {
            echo "<th>" . ($i + 1) . "</th>";
          }
          echo "</tr><tr>";
        
          // muestra valores de array
          for ($i = 0; $i < (count($numero) - 1); $i++) {
            echo "<td>$numero[$i]</td>";
          }
                    
          echo "</tr></table>"; // fin de la tabla          
          
          echo '<br><br><br>';
          
           echo "<p>Array Sumado</p>";
          
          //indice del array
          echo "<table><tr>";
          // muestra índice de array
          for ($i = 0; $i < (count($numero) - 1); $i++) {
            echo "<th>" . ($i + 1) . "</th>";
          }
          echo "</tr><tr>";
        
          // muestra valores de array
          for ($i = 0; $i < (count($numero) - 1); $i++) {
            echo "<td>".$suma += $numero[$i]."</td>";
          }
                    
          echo "</tr></table>"; // fin de la tabla
        } else {
        ?>
        <form action="#" method="get">
          Introduce un número:
          <input type="number" name="numero" required autofocus/>
          <input type="hidden" name="contador" value="<?= $contador ?>"/>
          <input type="hidden" name="texto" value="<?= $texto ?>"/>
          <input type="submit" value="Enviar"/>
        </form>

        <?php          
        }
      ?>
    </body>
</html>
