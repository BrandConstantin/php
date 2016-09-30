<?php
    $total=0;
    
    for($i = 0; $i < 10; $i++){
        $puntos = $_POST["p".$i];
            
        if($puntos == 1){
            $total++;
        }
    }
    
    if ($total >= 0 && $total <= 3) {
            echo "¡Enhorabuena! tu pareja parece ser totalmente fiel";
        } else if ($total >= 4 && $total <= 7){
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente "
                . "será algo sin importancia. No bajes la guardia.";
        } else {
            echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona."
                . " Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza";
    }
?>