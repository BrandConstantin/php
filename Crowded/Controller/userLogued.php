<?php
session_start();

require_once '../Model/crowdedDB.php';

//recive the pass and the name of the userthrown in /home/costy/NetBeansProjects/Crowded/View/signInUser.php on line 37
$user = $_POST['userName'];
$pass = $_POST['userPass'];

$userFail = FALSE;
$passFail = FALSE;

//compruve if exists the user
if(User::compruveUser($user)){
    //if exist compruve the pass
    if($userPass == User::compruvePass($user)){
        //create the session with the user
        $_SESSION['userName'] = $user;
        $_SESSION['userPass'] = $userPass;
        
        //compruve if is the admin
        if(User::compruveAdmin($user)){
            //if he is the admin move to indexAdmin
            include '../View/indexAdmin.php';
        }else{
            //if he is a user move to indexUser
            header('Location: ../View/menuUser.php');
        }
    }else{
        //if the pass is not the same go back to login
        $passFail = true;
        include '../View/signInUser.php';
    }
}else{
    //if the name of the user is not the same go back to login
    $userFail = true;
    include '../View/signInUser.php';
}
?>