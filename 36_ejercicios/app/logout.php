<?php
// Inicio sesiones
session_start();

//Logout
if(isset($_SESSION["logged"])){
	unset($_SESSION["logged"]);
	//session_destroy();
	header("Location: login.php");
}
?>