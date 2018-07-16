<?php
    session_start();
    
    include_once 'CookieMonster.php';
    
    if(!isset($_SESSION['monster'])){
        $_SESSION['monster'] = serialize(new CookieMonster);
    }
    
    $monster = unserialize($_SESSION['monster']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
    $numCookie = $_POST['numCookie'];
    
    if (isset($numCookie)){
        $monster->eat($numCookie);
    }
?>
    <h4>Hello I'm a coocke monster and I'm eated <?=$monster->getCookie(); ?> cookies</h4>
    <form action="index_cookie.php" method="POST">
        <p>Give mi a number of cookie:</p>
        <input type="number" name="numCookie" min="1" max='10' placeholder="give mi cookie" autofocus="">
        <input type="submit" value="EAT">
    </form>
    <?php
        $_SESSION['monster'] = serialize($monster);
    ?>
</body>
</html>

