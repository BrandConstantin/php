<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El programa
pedirá que el usuario teclee la traducción al español de cada una de las palabras y comprobará si son
correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.
La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se
deben guardar en cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, la
aplicación puede llegar a contar con un número considerable de entradas en el mini-diccionario.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guardar color fondo en cookie</title>
        <link rel="stylesheet" type="text/css" href="estilos2.css"
    </head>
    <body>
        <h3>Mini-Diccionario</h3>
        <?php
            // actualizar cookies
            if ($_POST['accion'] == "actualizarC") {
              foreach ($_SESSION['diccionario'] as $espaniol => $ingles) {
                setcookie($espaniol, $ingles, time() + (365 * 24 * 3600));
              }
            }

            // carga las palabras en las cookie
            foreach ($_COOKIE as $espaniol => $ingles) {
              //con este if se descarga el identificador de sesió PHPSESSID
              //que esta guardado en forma de cookie y la cookie color del 
              //ejercicio anterior
              if (($espaniol != "PHPSESSID") && ($espaniol != "color")) {
                $_SESSION['diccionario'][$espaniol] = $ingles;
              }
            }

            // borrar coockie
            if ($_POST['accion'] == "borrarC") {
              foreach ($_SESSION['diccionario'] as $espaniol) {
                setcookie($espaniol, NULL, -1);
              }

              unset($_SESSION['diccionario']);
            }

            if (!isset($_SESSION['diccionario'])) {
              $_SESSION['diccionario'] = array(
                              'blanco' => 'white',
                              'amarillo' => 'yellow',
                              'rosa' => 'pink',
                              'rojo' => 'red', 
                              'morado' => 'purple',
                              'verde' => 'green', 
                              'azul' => 'blue', 
                              'maron' => 'maron', 
                              'gris' => 'grey', 
                              'negro' => 'black'
                          );
            }

            $diccionario = $_SESSION['diccionario'];

            if (!isset($_POST['espaniol'])) {
              echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";

              // extraer las palabras españolas
              foreach ($diccionario as $clave => $valor) {
                $palabrasEsp[] = $clave;
              }

              // elegir 5 palabras españolas que no se repitan
              $contadorPalabras = 0;
              $espaniol = array();

              do {
                $palabra = $palabrasEsp[rand(0, count($palabrasEsp) - 1)];

                if (!in_array($palabra, $espaniol)) {
                  $espaniol[] = $palabra;
                  $contadorPalabras++;
                }
              } while ($contadorPalabras < 5);

              echo '<form action="respuestas.php" method="post">';
              echo '<input type="hidden" name="ejercicio" value="08">';

              for ($i = 0; $i < 5; $i++) {
                echo $espaniol[$i]." ";
                echo '<input type="hidden" name="espaniol['.$i.']" value="'.$espaniol[$i].'">';
                echo '<input type="text" name="ingles['.$i.']" ><br>';
              }

              echo '<input type="submit" value="Aceptar">';
              echo '</form>';
            }  else {
              $espaniol = $_POST['espaniol'];
              $ingles = $_POST['ingles'];

              for ($i = 0; $i < 5; $i++) {
                echo $espaniol[$i].": ".$ingles[$i];

                if ($diccionario[$espaniol[$i]] == $ingles[$i]) {
                  echo " - CORRECTO<br>";
                } else {
                  echo " - INCORRECTO <br>";
                  echo "La respuesta correcta es ".$diccionario[$espaniol[$i]]."<br>";
                }
              }
            }
        ?>
        <hr>
        <form action="respuestas.php" method="post">
          <input type="hidden" name="ejercicio" value="08">
          <input type="submit" value="Volver a intentar">
        </form>
        <hr>
        <form action="respuestas.php" method="post">
          <input type="hidden" name="ejercicio" value="08_administrarPalabras">
          <input type="submit" value="Administrar Palabras">
        </form>
    </body>
</html>