<?php

require './classes/Database.php';

$database = new Database;

$database->query('select * from phpdev.users');
$rows = $database->resultset();

foreach($rows as $row){
    echo 'Name: '.$row['name'].'<br/>';
    echo 'Pass: '.$row['pass'].'<br/>';
    echo 'Date Creation: '.$row['date_creation'].'<br/>';
}
//endforeach;


echo '<br/><br/><br/>';

/* other query */
$database->query('select * from phpdev.users where user_id = :id');
$database->bind(':id', 1);
$rows = $database->resultset();

foreach($rows as $row):    
    echo 'Name: '.$row['name'].'<br/>';
    echo 'Pass: '.$row['pass'].'<br/>';
    echo 'Date Creation: '.$row['date_creation'].'<br/>';
endforeach;
?>

<a href="insert_data.php">Insert Data</a>
<br/>
<a href="update.php">Update Data</a>
<br/>
<a href="delete.php">Delete Data</a>