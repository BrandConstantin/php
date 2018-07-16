<?php
session_start();

$conection = new mysqli("localhost","root","Sjzm0080","crowded");

if ($conection->connect_error > 0) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die ("Error: " . $conection->connect_error);
} else {
    $conection->select_db("crowded");
    $conection->set_charset("utf8");
}

if($_POST['action'] == "modify"){/*
    if ($query->num_rows > 0) {
        // compruve if exist a client whith this name and email
        $query = $conection->query("SELECT pubName, pubEmail FROM pub WHERE pubName=".$_POST['pubName'].""
                . " AND pubEmail=".$_POST['pubEmail']);   

        echo "Ya existe un local con el Nombre ".$_POST['pubName']." o con el Correo ".$_POST['pubEmail']."<br>";
        echo "Por favor, vuelva a introducir los datos".header("Refresh: 5; url=pubs.php");
    }else{*/
        //realize a sign up to a user
        $update = "UPDATE pub SET 
                            pubId='$_POST[pubId]', pubLogo='$_POST[pubLogo]', pubName ='$_POST[pubName]', pubPass ='$_POST[pubPass]', pubEmail ='$_POST[pubEmail]',
                            pubUbication ='$_POST[pubUbication]', city = '$_POST[city]', dateHigh ='$_POST[dateHigh]', capacity = '$_POST[capacity]',
                            musicType ='$_POST[musicType]', pubDj ='$_POST[pubDj]', userType ='$_POST[userType]' 
                    WHERE pubId ='$_POST[pubId]'";

        $updated = $conection->query($update);
        mysqli_query($conection, $updated);

        echo "<h1>Local modificado correctamente.</h1>";
        header("Refresh: 3; url=pubs.php");
    //}
}
?>