<?php

session_start();

if(isset($_SESSION['contador'])){
    $_SESSION['contador']++;
}else{
    $_SESSION['contador'] = 1;
}

echo "<h1>Nos ha visitado ".$_SESSION['contador']." veces</h1>";