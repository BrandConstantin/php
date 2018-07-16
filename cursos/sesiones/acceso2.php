<?php

$usuario = 'migue';
$passwd = "ad4";
$error = "si";

if(($_POST['nombre'] == $usuario) && ($_POST['pass'] == $passwd)){
    session_start();
    
    $_SESSION['verificado'] = "si";
    echo "Bienvenido a tu página";
    echo "<a href='acceso3.php'>Página privada</a>";
}else{
    header("Location: acceso.php?error=si");
}