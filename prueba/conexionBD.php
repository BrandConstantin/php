<?php
    $conexion = mysql_connect("localhost", "root", "root");
    
    if($conexion){
        echo "Se ha establecido conexión con el servidor de BD";
    }else{
        echo "No se ha podido establecer conexión con el servidor de BD";
    }
?>