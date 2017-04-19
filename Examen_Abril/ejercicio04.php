<!DOCTYPE html>
<!--
Realiza un traductor de español a francés. El programa pedirá una palabra en español y dará
la correspondiente traducción en francés. Si el programa no es capaz de encontrar la
traducción deber dar un mensaje de error. Utiliza un array asociativo para representar el
diccionario español-inglés y otro array asociativo para representar el diccionario inglés-
francés (lo puedes crear a partir de la tabla que se muestra a continuación). El programa
pedirá la palabra en español, con ella buscará en el diccionario español-inglés la traducción, y
con la palabra en inglés buscará en el diccionario inglés-francés la respuesta final que se
debe mostrar por pantalla. El programa no se dará por bueno si no se siguen estos pasos.
Para este ejercicio no es válido crear un array asociativo que haga de diccionario
español-francés. A continuación se dan algunos ejemplos de palabras en español, inglés y
francés.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Traductor</title>
    </head>
    <body> 
        <?php
            if(isset($_GET['palabra'])){
                $palabra = $_GET['palabra'];
                
                $esp_ing = array (
                    'ordenador' => 'computer',
                    'sol' => 'sun', 
                    'leche' => 'milk', 
                    'rojo' => 'red',
                    'manzana' => 'apple'
                    );
                
                $ing_fra = array (
                    'computer' => 'ordinateur',
                    'sun' => 'soleil', 
                    'milk' => 'lait', 
                    'red' => 'rouge',
                    'apple' => 'pomme'
                    );

                foreach ($esp_ing as $espaniol => $ingles){
                   $wordInglesas[]  = $espaniol;
                }
                
                //busca la palabra en ingles
                if(in_array($palabra, $wordInglesas)){
                    //encuantra la palabra espaniol - ingles
                    $palabra == $esp_ing[$palabra];                    
                    
                    echo "<h3>".$palabra." == ".$esp_ing[$palabra]." == ";
                }else{
                    echo 'Desconozco esta palabra';
                }
                
                //busca la palabra en frances
                foreach ($ing_fra as $ingles => $frances) {
                    $workFrancesas[] = $ingles;  
                    $ingles = $esp_ing[$palabra];
                }                
                    
                if(in_array($ingles, $workFrancesas)){
                    //$palabra == $ing_fra[$palabra];
                    echo $ing_fra[$ingles]."</h3><br><br>";
                }
            }
        ?>
        <form action="ejercicio04.php" method="get">
            <input type="hidden" name="diccionario" value="7">
            Palabra en español : <input type="text" name ="palabra" autofocus="" required="">
            <input type="submit" value="OK">
        </form>
    </body>
</html>