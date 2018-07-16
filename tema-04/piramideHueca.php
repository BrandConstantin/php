<!DOCTYPE html>
<!--
Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.
-->
<html>
    <head>
        <title>Dibujar Piramide</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Dibujar Piramide</h1>
        <hr style="border-style: dotted 1px #f34">

        <div id="content">
          <?php
            $alturaIntroducida = $_POST['alturaIntroducida'];
            $figura = $_POST['figura'];

            if (!isset($alturaIntroducida)){
            ?>
            <h2>Pirámide hueca</h2>
            <form action="piramideHueca.php" method="post">
              Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""><br>
              Figura base:
              <select name="figura">
                <?php
                  $figura = array (
                    "bolita" => "Bolita", "ladrillo" => "Ladrillo", "pinguino" => "Pingüino",
                    "pina" => "Piña", "sol" => "Sol",
                  );

                  foreach ($figura as $clave => $valor) {
                  ?>
                  <option value="<?php echo $clave; ?>" 
                        style="background-image: url(<?php echo $clave; ?>.png);
                        background-repeat: no-repeat;
                        background-size: 15px;
                        background-position: 1px;
                        padding-left:20px;
                        "><?php echo $valor; ?></option>
                  <?php
                  }
                  ?>
              </select>
              <input type="submit" value="Aceptar">
            </form>
            <?php
            } else { // pinta la pirámide //////////////////////////////
              $altura = 1;
              $i = 0;
              $espaciosPorDelante = $alturaIntroducida - 1;
              $espaciosInternos = 0;

              while ($altura < $alturaIntroducida) {

                // inserta espacios por delante
                for ($i = 1; $i <= $espaciosPorDelante; $i++) {
                  echo "<img src=\"img/blanco.png\" width=\"36\">";
                }

                // pinta la línea
                echo "<img src=\"img/$figura.png\" width=\"36\">";
                for ($i = 1; $i < $espaciosInternos; $i++) {
                  echo "<img src=\"img/blanco.png\" width=\"36\">";
                }

                if ($altura > 1) {
                  echo "<img src=\"img/$figura.png\" width=\"36\">";
                }

                echo "<br>";

                $altura++;
                $espaciosPorDelante--;
                $espaciosInternos += 2;
              } // while

              // base de la pirámide
              for ($i = 1; $i < $altura * 2; $i++) {
                echo "<img src=\"img/$figura.png\" width=\"36\">";
              }
            }
            ?>
        </div>   
    </body>
</html>
