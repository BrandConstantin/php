<?php 
require_once 'connect.php';
?>
<!DOCTYPE HTML>
<html>
<head lang="es">
	<meta charset="utf-8" />
	<title>Web con PHP</title>
	<link type="text/css" rel="stylesheet" href="assets/components/bootstrap/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="assets/components/bootstrap/dist/css/bootstrap-theme.min.css" />
	<script type="text/javascript" src="assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/components/jquery/jquery.min.js"></script>

</head>
<body>
	<div class="container">
		<h1>Web con PHP</h1>
		<hr/>
		
		<?php if(isset($_SESSION["logged"])){ ?>
		<div class="col-lg-10">
			<a href="index.php" class="btn btn-success">Home</a>
			<a href="crear.php" class="btn btn-primary">Crear nuevo usuario</a>
		</div>
		<div class="col-lg-2">
			<?php echo "Bienvenido ".$_SESSION["logged"]["name"]." ". $_SESSION["logged"]["surname"]; ?>
			<a href="logout.php">Cerrar sesión</a>
		</div>
		<div class="clearfix"></div>
		<hr/>
		<?php } ?>
			
		<?php $variable = "Contenido"; ?>