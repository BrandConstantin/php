<?php

require './classes/Database.php';

$database = new Database;

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

/* update data */
if($_POST['submit']){
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $date_creation = $_POST['date_cration'];

    $database->query('update phpdev.users set name = :name, pass = :pass, date_creation = :date_creation where user_id = :user_id');
    $database->bind(':user_id', $user_id);
    $database->bind(':name', $name);
    $database->bind(':pass', $pass);
    $database->bind(':date_creation', $date_creation);
    $database->execute();
}
?>

<h1>Form to updata</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Post ID</label>
    <input type="text" name="user_id" placeholder="specifi id"/><br/>
    <label>Name</label>
    <input type="text" name="name" placeholder="add a name"/><br/>
    <label>Pass</label>
    <input type="text" name="pass" placeholder="add a pass"/><br/>
    <label>Date Creation</label>
    <input type="text" name="date_creation" placeholder="add a name"/><br/>    
    <input type="submit" name="submit" value="Submit"/>
</form>

<br/><br/><br/>

<?php
$database->query('select * from phpdev.users');
$rows = $database->resultset();

foreach($rows as $row):
    echo 'ID: '.$row['user_id'].'<br/>';
    echo 'Name: '.$row['name'].'<br/>';
    echo 'Pass: '.$row['pass'].'<br/>';
    echo 'Date Creation: '.$row['date_creation'].'<br/><br/><br/>';
endforeach;
?>

<br/><br/><br/>
<a href="index.php">Go Back</a>