<?php   error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>

  <head>
    <title>Ejercicio 3</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <div id="contenedor">
      <!--
        En ajedrez, el valor de las piezas se mide en peones según la siguiente 
        tabla:
        (ver tabla en pdf)
        Realiza un programa que genere al azar las capturas que han hecho dos 
        jugadores durante una partida. Las capturas pueden ir de 0 a 15 Hay que 
        tener en cuenta que cada jugador tiene la posibilidad de capturar 
        algunas de las siguientes piezas (no más): 1 dama, 2 torres, 2 alfiles, 
        2 caballos y 8 peones.
        (ver ejemplo en pdf)
        El valor de cada pieza se debe almacenar en un array asociativo.
      -->      
      <?php 
        $piesas = array("dama" => 9, "torre" => 5, "alfil" => 3, "caballo" => 2, "peon" => 1);

        // JUGADOR 1
        
        $totalJugador1 = rand(0, 15);
        $capturasJugador1;
        $cuentaDama1 = 0;
        $cuentaTorre1 = 0;
        $cuentaAlfil1 = 0;
        $cuentaCaballo1 = 0;
        $cuentaPeon1 = 0;
        $sumatorio1 = 0;
        $captura1;
        
        // generar de forma aleatoria las piesas
        foreach ($piesas as $clave => $valor) {
          $piesasAux[] = $clave;
        }
        
        // genera capturas
        do {
          $captura1 = $piesasAux[rand(0, 4)];
          
          // máximo damas
          if ($captura1 == $piesasAux[0]) {
            if ($cuentaDama1 < 1) {
              $capturasJugador1[] = $captura1;
              $cuentaDama1++;
              $sumatorio1 += 9;
            }
          }
          
          // máximo torres
          if ($captura1 == $piesasAux[1]) {
            if ($cuentaTorre1 < 2) {
              $capturasJugador1[] = $captura1;
              $cuentaTorre1++;
              $sumatorio1 += 5;
            }
          }
          
          // máximo alfiles
          if ($captura1 == $piesasAux[2]) {
            if ($cuentaAlfil1 < 2) {
              $capturasJugador1[] = $captura1;
              $cuentaAlfil1++;
              $sumatorio1 += 3;
            }
          }
          
          // máximo caballos
          if ($captura1 == $piesasAux[3]) {
            if ($cuentaCaballo1 < 2) {
              $capturasJugador1[] = $captura1;
              $cuentaCaballo1++;
              $sumatorio1 += 2;
            }
          }
          
          // máximo peones
          if ($captura1 == $piesasAux[4]) {
            if ($cuentaPeon1 < 8) {
              $capturasJugador1[] = $captura1;
              $cuentaPeon1++;
              $sumatorio1++;
            }
          }
          
          $contador++;
        } while ($contador < $totalJugador1);

        // JUGADOR 2

        $totalJugador2 = rand(0, 15);
        
        $capturasJugador2;
        $cuentaDama2 = 0;
        $cuentaTorre2 = 0;
        $cuentaAlfil2 = 0;
        $cuentaCaballo2 = 0;
        $cuentaPeon2 = 0;
        $sumatorio2 = 0;
        $captura2;
        
        // genera la piesas de forma aleatoria
        foreach ($piesas as $clave => $valor) {
          $piesasAux[] = $clave;
        }
        
        // genera capturas
        do {
          $captura2 = $piesasAux[rand(0, 4)];
          
          // máximo damas
          if ($captura2 == $piesasAux[0]) {
            if ($cuentaDama2 < 1) {
              $capturasJugador2[] = $captura2;
              $cuentaDama2++;
              $sumatorio2 += 9;
            }
          }
          
          // máximo torres
          if ($captura2 == $piesasAux[1]) {
            if ($cuentaTorre2 < 2) {
              $capturasJugador2[] = $captura2;
              $cuentaTorre2++;
              $sumatorio2 += 5;
            }
          }
          
          // máximo alfiles
          if ($captura2 == $piesasAux[2]) {
            if ($cuentaAlfil2 < 2) {
              $capturasJugador2[] = $captura2;
              $cuentaAlfil2++;
              $sumatorio2 += 3;
            }
          }
          
          // máximo caballos
          if ($captura2 == $piesasAux[3]) {
            if ($cuentaCaballo2 < 2) {
              $capturasJugador2[] = $captura2;
              $cuentaCaballo2++;
              $sumatorio2 += 2;
            }
          }
          
          // máximo peones
          if ($captura2 == $piesasAux[4]) {
            if ($cuentaPeon2 < 8) {
              $capturasJugador2[] = $captura2;
              $cuentaPeon2++;
              $sumatorio2++;
            }
          }
          
          $contador++;
        } while ($contador < $totalJugador2);
        
        
        // muestra capturas
        echo "<table>"
            . "<tr>"
            . "<th>Jugador 1</th>"
            . "<th>||</th>"
            . "<th>Jugador 2</th>"
            . "</tr>"
            . "<tr>"
            . "<td>Dama: $cuentaDama1</td>"
            . "<td>||</td>"
            . "<td>Dama: $cuentaDama2</td>"
            . "</tr>"
            . "<tr>"
            . "<td>Torre: $cuentaTorre1</td>"
            . "<td>||</td>"
            . "<td>Torre: $cuentaTorre2</td>"
            . "</tr>"
            . "<tr>"
            . "<td>Alfil: $cuentaAlfil1</td>"
            . "<td>||</td>"
            . "<td>Alfil: $cuentaAlfil2</td>"
            . "</tr>"
            . "<tr>"
            . "<td>Caballo: $cuentaCaballo1</td>"
            . "<td>||</td>"
            . "<td>Caballo: $cuentaCaballo2</td>"
            . "</tr>"
            . "<tr>"
            . "<td>Peón: $cuentaPeon1</td>"
            . "<td>||</td>"
            . "<td>Peón: $cuentaPeon2</td>"
            . "</tr>"
            . "<tr>"
            . "<td><strong>Resultado: $sumatorio1</strong></td>"
            . "<td><strong>||</strong></td>"
            . "<td><strong>Resultado: $sumatorio2</strong></td>"
            . "</tr>"
            . "</table>";
      ?>
    </div>
  </body>
</html>