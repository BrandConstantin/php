<!DOCTYPE html>
<!--
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diccionario</title>
    </head>
    <body> 
        <?php
            if(isset($_GET['palabra'])){
                $palabra = $_GET['palabra'];
                
                $palabras = array ('blanco' => 'white', 'amarillo' => 'yellow', 'rosa' => 'pink', 'rojo' => 'red', 'morado' => 'purple'
                        , 'verde' => 'green', 'azul' => 'blue', 'maron' => 'maron', 'gris' => 'grey', 'negro' => 'black');

                foreach ($palabras as $espaniol => $ingles){
                   $palabrasEspaniolas[]  = $espaniol;
                }

                if(in_array($palabra, $palabrasEspaniolas)){
                    echo "<h3>$palabra == $palabras[$palabra]</h3><br><br>";
                }else{
                    echo 'Desconozco esta palabra';
                }
            }
        ?>
        <form action="miniDiccionario.php" method="get">
            <input type="hidden" name="diccionario" value="7">
            Palabra en español : <input type="text" name ="palabra" autofocus="" required="">
            <input type="submit" value="OK">
        </form>
    </body>
</html>