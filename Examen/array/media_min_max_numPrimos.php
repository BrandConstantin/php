<?php
  session_start();
  
  error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>

  <body>
    <div id="container">
      <!--      
        Escribe un programa que pida números positivos uno detrás de otro. 
        Se termina introduciendo un número negativo. A continuación, el programa 
        debe mostrar la media, el máximo, el mínimo y el número de primos 
        encontrados. Utiliza sesiones para propagar los datos necesarios; no se 
        permite utilizar campos ocultos en formularios.
      -->      
      <?php
          $numero = $_GET['numero'];
          $suma =& $_SESSION['suma'];
          $contador =& $_SESSION['contador'];
          $contadorPrimos =& $_SESSION['contadorPrimos'];
          $max =& $_SESSION['max'];
          $min =& $_SESSION['min'];
          
          // inicializo
          if(!isset($contador)) {
            $numero =& $_SESSION['numero'];
            $suma = 0;
            $contador = 0;
            $contadorPrimos = 0;
            $max = -PHP_INT_MAX;
            $min = PHP_INT_MAX;
          }
          
          // media
          $suma += $numero;
          
          // max
          if ($numero > $max) {
            $max = $numero;
          }
          //primo
          $primo = true;
          if(($numero % 2 == 0) && ($numero > 0)){
              $primo = true;
          }else{
              $primo = FALSE;
          }
          //contador primos
          if($primo == true){
              $contadorPrimos++;
          }
          
          if ($numero >= 0 || !isset($numero)) {
            $contador++;
            
            // min para que no se considere min un número negativo
            if ((isset($numero)) && ($numero < $min)) {
              $min = $numero;
            }
          ?>

          <form action="#" method="get">
            Introduce número
            <input type="number" name="numero" autofocus/>
            <input type="submit" value="Enviar"/>
          </form>

        <?php
          } else {
              //para que el ultimo número, es decir el negativo no me lo añade ni en 
              //contador ni en la suma
            $contador--;
            $suma -= $numero; 
            
            echo "<table>"
            . "<tr>"
              . "<th>Total números</th>"
              . "<td>$contador</td>"
              . "</tr>"
              . "<tr>"
              . "<th>Media</th>"
              . "<td>" . ($suma / $contador) . "</td>"
              . "</tr>"
              . "<tr>"
              . "<th>Mayor</th>"
              . "<td>$max</td>"
              . "</tr>"
              . "<tr>"
              . "<th>Menor</th>"
              . "<td>$min</td>"
              . "</tr>"
              . "<tr>"
              . "<th>Cantidad primos</th>"
              . "<td>$contadorPrimos</td>"
              . "</tr>"
              . "</table>";
          }          
        ?> 
    </div>
  </body>
</html>