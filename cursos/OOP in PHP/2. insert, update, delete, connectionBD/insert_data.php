<?php

require './classes/Database.php';

$database = new Database;

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

/* insert data */
if($_POST['submit']){
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $database->query('insert into phpdev.users (name, pass) value (:name, :pass)');
    $database->bind(':name', $name);
    $database->bind(':pass', $pass);
    $database->execute();

    if($database->lastInsertId()){
        echo '<p>Post Added!</p>';
    }
}

$database->query('select * from phpdev.users');
$rows = $database->resultset();

/* insert data */
?>
<h1>Form to add data</h1>
<!-- para enviar los datos a la misma página que estamos -->
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Name</label>
    <input type="text" name="name" placeholder="add a name" required/><br/>
    <label>Pass</label>
    <input type="text" name="pass" placeholder="add a pass" required/><br/>
    <input type="submit" name="submit" value="Submit"/>
</form>

<br/><br/><br/>

<?php 
foreach($rows as $row){
    echo 'Name: '.$row['name'].'<br/>';
    echo 'Pass: '.$row['pass'].'<br/>';
    echo 'Date Creation: '.$row['date_creation'].'<br/>';
}
//endforeach;

?>

<br/><br/><br/>
<a href="index.php">Back to List</a>