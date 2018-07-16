<?php

require './classes/Database.php';

$database = new Database;

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

/* update data */
if($_POST['delete']){
    $delete_id = $_POST['delete_id'];

    $database->query('delete from phpdev.users where user_id = :user_id');
    //$database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
    $database->bind(':user_id', $delete_id);
    $database->execute();
}
?>

<h1>Delete updata</h1>
<br/><br/><br/>

<?php
$database->query('select * from phpdev.users');
$rows = $database->resultset();

foreach($rows as $row):
    echo 'ID: '.$row['user_id'].'<br/>';
    echo 'Name: '.$row['name'].'<br/>';
    echo 'Pass: '.$row['pass'].'<br/>';
    echo 'Date Creation: '.$row['date_creation'].'<br/><br/><br/>';?>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
        <input type="hidden" name="delete_id" value="<?php echo $row['user_id']; ?>"/>
        <input type="submit" name="delete" value="Delete"/>
    </form><?php
endforeach;
?>

<br/><br/><br/>
<a href="index.php">Go Back</a>