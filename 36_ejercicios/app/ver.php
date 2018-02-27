<?php include 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php
if(!isset($_GET["id"]) || empty($_GET["id"]) || !is_numeric($_GET["id"])){
	header("Location:index.php");
}

$id = $_GET["id"]; 
$user_query = mysqli_query($db, "SELECT * FROM users WHERE user_id = {$id}");
$user = mysqli_fetch_assoc($user_query);

if(!isset($user["user_id"]) || empty($user["user_id"])){
	header("Location:index.php");
}
?>

<?php if($user["image"] != null){ ?>
<div class="col-lg-2">
		<img src="uploads/<?php echo $user["image"] ?>" width="120"/><br/>
</div>
<?php } ?>

<div class="col-lg-6">
	<h3><strong><?php echo $user["name"]." ".$user["surname"]; ?></strong></h3>
	<p>Email: <?php echo $user["email"]; ?></p>
	<p>Biografia: <?php echo $user["bio"]; ?></p>
</div>
<div class="clearfix"></div>
<!--<a href="index.php" class="btn btn-success">Volver al listado</a>-->
<?php require_once 'includes/footer.php'; ?>