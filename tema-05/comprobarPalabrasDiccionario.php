<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio
anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras
y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas
y cuántas erróneas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diccionario</title>
    </head>
    <body>
<?php
    $diccionario = array ('blanco' => 'white', 'amarillo' => 'yellow', 'rosa' => 'pink', 'rojo' => 'red', 'morado' => 'purple'
                          , 'verde' => 'green', 'azul' => 'blue', 'maron' => 'maron', 'gris' => 'grey', 'negro' => 'black');

    if (!isset($_GET['espanol'])) {
      echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";

      // Extrae las palabras españolas
      foreach ($diccionario as $clave => $valor) {
        $palabrasEspanolas[] = $clave;
      }

      // elige palabras en español sin que se repita ninguna
      $contadorPalabras = 0;
      
      do {
        $palabra = $palabrasEspanolas[rand(0, 9)];
        if (!in_array($palabra, $espanol)) {
          $espanol[] = $palabra;
          $contadorPalabras++;
        }
      } while ($contadorPalabras < 5);

      echo '<form action="comprobarPalabrasDiccionario.php" method="get">';
      echo '<input type="hidden" name="ejercicio" value="12">';
      
      for ($i = 0; $i < 5; $i++) {
        echo $espanol[$i]." ";
        echo '<input type="hidden" name="espanol['.$i.']" value="'.$espanol[$i].'">';
        echo '<input type="text" name="ingles['.$i.']" ><br>';
      }
      
      echo '<input type="submit" value="Aceptar">';
      echo '</form>';

    } else {
      $espanol = $_GET['espanol'];
      $ingles = $_GET['ingles'];

      for ($i = 0; $i < 5; $i++) {
        if ($diccionario[$espanol[$i]] == $ingles[$i]) {
          echo '<span style="color: blue;">'.$espanol[$i].": ".$ingles[$i];
          echo " - correcto</span><br>";
        } else {
          echo '<span style="color: red;">'.$espanol[$i].": ".$ingles[$i];
          echo " - incorrecto</span>, la respuesta correcta es <b>".$diccionario[$espanol[$i]]."</b><br>";
        }
      }
    }
?>
    </body>
</html>