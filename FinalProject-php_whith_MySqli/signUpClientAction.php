<?php 
    //compruve if is stablished the conexion with the mysql
    $conexion = new mysqli("localhost", "root", "-");

    if ($conexion->connect_error > 0) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $conexion->connect_error);
    } else {
        $conexion->select_db("crowded");
        $conexion->set_charset("utf8");
    }
    
    if ($query->num_rows > 0) {
        // compruve if exist a client whith this name and email
        $query = $conexion->query("SELECT userName, userEmail FROM user WHERE userName=".$_POST['userName'].""
                . " AND userEmail=".$_POST['userEmail']);   
    ?>
        Ya existe un cliente con el Nombre <?= $_POST['userName'] ?> o con el Correo <?= $_POST['userEmail'] ?><br>
        Por favor, vuelva a introducir los datos <a href="signUpClient.php">Sign Up</a>
    <?php
    }else{
        //realize a sign up to a user
        $inserction = "INSERT INTO user (userPhoto, userName, userPass, userEmail, city) "
                . "VALUES ('$_POST[userPhoto]', '$_POST[userName]','$_POST[userPass]','$_POST[userEmail]', '$_POST[city]')";
       
        $conexion->query($inserction); //or die($conexion->error);
        
        echo "<h1>Cliente dado de alta correctamente.</h1>";
            
        $conexion->close();
            
        header("Refresh: 3, url=index.php");
    }
?>
