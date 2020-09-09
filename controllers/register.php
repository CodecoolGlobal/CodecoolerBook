<?php


$userFeedBack = '';
if( isset($_POST['submit']) ){
    $userInputEmail = $_POST["email"];
    $userEmails = $database -> select("user", "email", $userInputEmail );
    $userFeedBack = '';
    if($userEmails === false){
        $userInputEmail = $_POST["email"];
        $userInputPass = $_POST["pass"];
        $hashedPassword = password_hash($userInputPass, PASSWORD_DEFAULT);
        $database -> addUser("user", $userInputEmail, $hashedPassword );
     $userFeedBack = " Succes";
    }else{
        $userFeedBack = "Not Succes";
    }


}


require 'views/register.view.php';