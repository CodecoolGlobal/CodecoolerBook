<?php
    $userFeedback = '';
    if( isset($_POST['submit']) ){
    $userInputEmail = $_POST["email"];
    $userDetails = $database -> select("user", "*", $userInputEmail );
    if($userDetails && password_verify($_POST['password'],$userDetails['password'])){
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
        $userInfo = $database->selectUserData("user_profile","*",$userId);
        $counter =0;
        foreach ($userInfo as $item){
            if($item===null){
                $counter++;
            }
        }

        if($counter > 4){
            header('Location: http://localhost:8080/codecoolerbook/editprofile');
        } else {
            header('Location: http://localhost:8080/codecoolerbook/wall?id='.$_SESSION['userId']);
        }
        var_dump($userInfo);

    }else{
        $userFeedback = "Not Succes";
    }
    }
    require 'views/login.view.php';
