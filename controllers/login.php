<?php
    $userFeedback = '';
    if( isset($_POST['submit']) ){
    $userInputEmail = $_POST["email"];
    $userDetails = $database -> select("user", "*", $userInputEmail );
    if($userDetails && $userDetails['password'] === $_POST['password']){
        $userInputEmail = $_POST["email"];
        $userInputPass = $_POST["password"];
        $userId = $userDetails['id'];
//        if($_POST['remember']){
//            session_set_cookie_params((3600*24*30),"/");
//        }
        session_start();
        session_destroy();
        $_SESSION['userId'] = $userId;
        $_SESSION['userEmail'] = $userInputEmail;
        $userFeedback = "Succes";
        var_dump($_SESSION);

    }else{
        $userFeedback = "Not Succes";
    }
    }
    require 'views/login.view.php';
