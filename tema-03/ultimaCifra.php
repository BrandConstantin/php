<?php
    $numero = $_POST["numero"];
    
    $cifra = $numero % 10;
    
    echo 'La ultima cifra introducida es: ', $cifra;
?>