<?php
    $conexion = new mysqli("localhost", "root", "-");

    if ($conexion->connect_errno > 0) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $conexion->connect_error);
    } else {
        $conexion->select_db("crowded");
        $conexion->set_charset("utf8");
    }
    
    if((!isset($user)) && (!isset($pass))){
        $user = "emptyUser";
        $pass = "emptyPass";
    }
    
    if(isset($_POST['user'])){
        $user = $_POST['userName'];
        $pass = $_POST['userPass'];
    }else if(isset($_POST['pub'])){
        $user = $_POST['pubName'];
        $pass = $_POST['pubPass'];
    }
    
    if(($user != "emptyUser") && ($pass != "emptyPass")){
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        
        $list = new conexion;
        $list->login($user, $pass);
        $list->close();
    }
    
    
?>
