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

if($_POST['action'] == "eliminy"){
    /*if ($query->num_rows > 0) {
            // compruve if exist a client whith this name and email
            $query = $conection->query("SELECT pubName, pubEmail FROM pub WHERE pubName=".$_POST['pubName'].""
                    . " AND pubEmail=".$_POST['pubEmail']);   

            echo "Ya existe un local con el Nombre ".$_SESSION['pubName']." o con el Correo ".$_SESSION['pubEmail']."<br>";
            echo "Por favor, vuelva a introducir los datos".header("Refresh: 5; url=pubs.php");
        }else{*/
            //realize a sign up to a user
            $drop = "DELETE FROM pub WHERE pubId ='$_POST[pubId]'";

            $dropted = $conection->query($drop);
            mysqli_query($conection, $dropted);

            echo "<h1>Local eliminado correctamente.</h1>";
            header("Refresh: 3; url=pubs.php");
    //}
}
?>