<?php
    include '../config.php';
    include '../system/session.php';
    include '../model/check.php';

    $username= $_POST['login-u'];
    $password= $_POST['login-p'];

    $return = check($username,$password);
    
    if($return==1){
        per_session("user",$username);
        temp_session("welcome","Welcome ".$username);
        header('Location: '.$config["base_url"].'view/dashboard.php');
    }
    else{
        header('Location: '.$config["base_url"].'');
    }