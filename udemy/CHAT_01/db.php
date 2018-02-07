<?php

$con = mysqli_connect("localhost", "root", "", "chat");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//format the date
function formatDate($date){
    return date('g:i a', strtotime($date));
}
