<?php

session_start([
   'cache_limiter' => 'private' ,
    'read_and_close' => FALSE,
]);

$_SESSION['name'] = "Lawrence";
?>
<a href="loggedin.php">Logged in</a>