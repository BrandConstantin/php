<?php
    $hora = $_POST["hora"];
    
    if(($hora >= 6) && ($hora <= 12)){
        echo '<h1>Buenos dias campeon!</h1>';
    }else if(($hora >= 13) && ($hora <= 20)){
        echo '<h1>Buenas tarde princesa!</h1>';
    }else if(($hora >= 21) || ($hora <= 24) || ($hora >= 1) || ($hora <= 5)){
        echo '<h1>Buenas noches hermano</h1>';
    }else{
        echo '<h1>Has introducido una hora incorrecta. <br>'
        . 'No te quede conmigo!';
    }
?>

