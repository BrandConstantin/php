<?php

$serverName = "localhost";
$connectionInfo = array("Database"=>"prueba", "UID"=>"prueba2", "PWD"=>"prueba23*", "CharacterSet"=>"utf-8");
$con = sqlsrv_connect($serverName, $connectionInfo);

if($con){
    echo 'Conexión realizada!';
}else{
    echo 'Fallo en conexión!';
}