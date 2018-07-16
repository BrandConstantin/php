<?php

function validateEmail($email){
    if(!empty($email) && (filter_var($email, FILTER_VALIDATE_EMAIL))){
        $status = "valido";
    }else{
        $status = "no valido";
    }
    
    return $status;
}

$email = "";

if(isset($_GET['email'])){
    $email = $_GET['email'];
}

echo validateEmail($email);