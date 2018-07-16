<?php 
    //compruve if is stablished the conexion with the mysql
    $conexion = new mysqli("localhost", "root", "Sjzm0080");

    if ($conexion->connect_error > 0) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $conexion->connect_error);
    } else {
        $conexion->select_db("crowded");
        $conexion->set_charset("utf8");
    }
    
    if ($query->num_rows > 0) {
        // compruve if exist a client whith this name and email
        $query = $conexion->query("SELECT pubName, pubEmail FROM pub WHERE pubName=".$_POST['pubName'].""
                . " AND pubEmail=".$_POST['pubEmail']);   
    ?>
        Ya existe un local con el Nombre <?= $_POST['pubName'] ?> o con el Correo <?= $_POST['pubEmail'] ?><br>
        Por favor, vuelva a introducir los datos <a href="signUpPub.php">Sign Up</a>
    <?php
    }else{
        //realize a sign up to a user
        $inserction = "INSERT INTO pub (pubLogo, pubName, pubPass, pubEmail, pubUbication, city, capacity, musicType, pubDj) "
                . "VALUES ('$_POST[pubLogo]', '$_POST[pubName]','$_POST[pubPass]','$_POST[pubEmail]', '$_POST[pubUbication]', "
                . "'$_POST[city]', '$_POST[capacity]', '$_POST[musicType]', '$_POST[pubDj]')";
       
        //echo "$inserction";
        $conexion->query($inserction); //or die($conexion->error);
        
        echo "<h1>Local dado de alta correctamente.</h1>";
            
        $conexion->close();
            
        header("Refresh: 3, url=index.php");
    }
?>