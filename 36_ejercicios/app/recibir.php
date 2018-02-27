<?php

if(isset($_POST["submit"])){
	if(!empty($_POST["name"]) && strlen($_POST["name"])<=20
		&& !is_numeric($_POST["name"]) && !preg_match("/[0-9]/", $_POST["name"])){
		echo $_POST["name"]."<br/>";
	}
	
	if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"]) && !preg_match("/[0-9]/", $_POST["surname"])){
		echo $_POST["surname"]."<br/>";
	}
	
	if(!empty($_POST["bio"])){
		echo $_POST["bio"]."<br/>";
	}
	
	if(!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		echo $_POST["email"]."<br/>";
	}
	
	if(!empty($_POST["password"]) && strlen($_POST["password"])>=6){
		echo sha1($_POST["password"])."<br/>";
	}
	
	if(!empty($_POST["role"])){
		echo $_POST["role"]."<br/>";
	}
	
	if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
		echo "La imagen nos ha llegado";
	}
}

