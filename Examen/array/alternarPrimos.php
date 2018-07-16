<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <div id="contenedor">
      <!--
        Realiza un programa que pida 8 números por teclado y que los almacene en 
        un array. A continuación se debe mostrar el contenido de ese array junto 
        al índice (0 – 7). Seguidamente el programa debe colocar de forma 
        alterna y en orden los primos y los no primos: primero primo, luego no 
        primo, luego primo, luego no primo... Cuando se acaben los primos o los 
        no primos, se completará con los números que queden.
        (ver ejemplo en pdf)
      -->      
      <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $numero = $_GET['numero'];
        $contador = $_GET['contador'];
        $texto = $_GET['texto'];        
        // añade el último número leído
        $texto = $texto . " " . $numero;
        $aux;
        $auxPrimos;
        $auxNoPrimos;
        
        if (!isset($contador)) {
          $contador = 0;
        }
        
        if ($contador < 7) {
          $contador++;
          ?>
      
      <form action="#" method="get">
        Introduce un número:
        <input type="number" name="numero" required autofocus/>
        <input type="hidden" name="contador" value="<?= $contador ?>"/>
        <input type="hidden" name="texto" value="<?= $texto ?>"/>
        <input type="submit" value="Enviar"/>
      </form>
      
      <?php
        } else {
          $texto = substr($texto, 2);
          $numero = explode(" ", $texto);
         
          echo "<p>Array original</p>";
          
          //indice del array
          echo "<table><tr>";
          // muestra índice de array
          for ($i = 0; $i < count($numero); $i++) {
            echo "<th>" . ($i + 1) . "</th>";
          }
          echo "</tr><tr>";
        
          // muestra valores de array
          for ($i = 0; $i < count($numero); $i++) {
            echo "<td>$numero[$i]</td>";
          }
                    
          echo "</tr></table>"; // fin de la tabla
          
           //ver los primos y los no primos          
          $i = 0;
          $j = 0;
          $k = 0;
          $primo = true;
          
          //introduce primos y no primos en arrays
          for ($i = 0; $i < count($numero); $i++) {   
            /*//ver los primos y los no primos
              $primo = true;
              if(($numero[$i] % 2 == 0) && ($numero[$i] > 0)){
                  //introduce primos en auxPrimos
                  $primo = true;
                  $auxPrimos[$j] = $numero[$i];
                  $j++;
              }else{
                  //introduce los no primos en auxNoPrimos
                  $primo = FALSE;
                  $auxNoPrimos[$k] = $numero[$i];
                  $k++;
              }*/
            // introduce primos en $auxPrimos
            if (primo($numero[$i])) {
              $auxPrimos[$j] = $numero[$i];
              $j++;
            }
          
          // introduce no primos en $auxNoPrimos
            if (!primo($numero[$i])) {
              $auxNoPrimos[$k] = $numero[$i];
              $k++;
            }
          }
          
          echo "<p>Array ordenado</p>";
          
          // coloca primos y no primos en $aux alternándolos
          $i = 0;
          $j = 0;
          $k = 0;
          
          // rellenado de $aux (opción 1)
          do {            
            if ($j < count($auxPrimos)) {
              $aux[] = $auxPrimos[$j];
              $j++;
            }
            
            if ($k < count($auxNoPrimos)) {
              $aux[] = $auxNoPrimos[$k];
              $k++;
            }
            
            $i++;
          } while ($i < (count($auxPrimos) + count($auxNoPrimos)));
          
            /*
            // rellenado de $aux (opción 2)
            for ($i = 0; $i < (count($auxPrimos) + count($auxNoPrimos)); $i++) {
              if ($primos == true) {
                if ($j < count($auxPrimos)) {
                  $aux[$i] = $auxPrimos[$j];
                  $j++;
                } else {
                  $aux[$i] = $auxNoPrimos[$k];
                  $k++;
                }
              } else {
                if ($k < count($auxNoPrimos)) {
                  $aux[$i] = $auxNoPrimos[$k];
                  $k++;
                } else {
                  $aux[$i] = $auxPrimos[$j];
                  $j++;
                }
              }
            }
            */
          
          // tabla que muestra el array $aux con los primos ordenados
          echo "<table><tr class='separador'>";
          
          // muestra índice de array $aux
          for ($i = 0; $i < count($aux); $i++) {
            echo "<th>" . ($i + 1) . "</th>";
          }
          
          echo "</tr><tr>";
          
          // muestra valores de array $aux
          for ($i = 0; $i < count($aux); $i++) {
            echo "<td>$aux[$i]</td>";
          }          
        }
        
        echo "</tr></table>"; // fin de la tabla
       
        // funcion
        function primo($numero) {
          $contador = 0;
          for($i = 1; $i <= $numero; $i++) {
            if($numero % $i == 0) {
              if($contador++ > 1) {
                return false;
              }
            }
          }
          return true;
        }
      ?>
    </div>
  </body>
</html>