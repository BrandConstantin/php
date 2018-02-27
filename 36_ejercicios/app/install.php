<?php
require_once 'includes/connect.php';

$sql = "CREATE TABLE IF NOT EXISTS users(
			user_id  int(255) auto_increment not null,
			name	 varchar(50),
			surname  varchar(255),
			bio			text,
			email	   varchar(255),
			password   varchar(255),
			role	  varchar(20),
			image	   varchar(255),
			CONSTRAINT pk_users PRIMARY KEY(user_id)
		);";
		
$create_usuarios_table = mysqli_query($db, $sql);

$sql = "INSERT INTO users VALUES(NULL, 'Víctor', 'Víctor', 'Web Developer', 'Víctor@Víctor.com', '".sha1("password")."', '1', NULL)";
$insert_user = mysqli_query($db, $sql);

$sql = "INSERT INTO users VALUES(NULL, 'Antonio', 'Antonio', 'Web Developer 1', 'antonio@antonio.com', '".sha1("password")."', '1', NULL)";
$insert_user1 = mysqli_query($db, $sql);

$sql = "INSERT INTO users VALUES(NULL, 'Manuel', 'Manuel', 'Web Developer 2', 'manuel@manuel.com', '".sha1("password")."', '1', NULL)";
$insert_user2 = mysqli_query($db, $sql);

$sql = "INSERT INTO users VALUES(NULL, 'David', 'David', 'Web Developer 3', 'david@david.com', '".sha1("password")."', '1', NULL)";
$insert_user3 = mysqli_query($db, $sql);

if($create_usuarios_table){
	echo "La tabla users se ha creado correctamente !!";
}


?>

