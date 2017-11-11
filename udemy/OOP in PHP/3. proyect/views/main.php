<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
    <!-- personal style -->
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Shareboard</title>
</head>
<body>
<div class="container">
    <a href="<?php echo ROOT_URL; ?>">Home</a>
    <a href="<?php echo ROOT_URL; ?>shares">Shares</a>
    <?php if(isset($_SESSION['is_logged_in'])): ?>
    <a href="<?php echo ROOT_URL; ?>users/login">Login</a>
    <a href="<?php echo ROOT_URL; ?>users/register">Shares</a>
    <?php else: ?>
    <a href="<?php echo ROOT_URL; ?>">Welcome <?php $_SESSION['user_data']['name']; ?></a>
    <a href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
    <?php endif; ?>
    <?php Messages::display(); ?>
    <div class="row">
        <?php
            require ($view);
        ?>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
</body>
</html>