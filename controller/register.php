<?php
    include '../config.php';
    include '../helper/basic.php';
    include '../system/session.php';
    include '../model/insert.php';
    include '../model/check.php';
    
    $username= $_POST['signup-u'];
    $password= $_POST['signup-p'];

    if(check_user($username)==1){
        temp_session("user_exist","Username exist");
        redirect($config['base_url'].'view/signup.php');
    }
    else{
        insert($username,$password);
        redirect($config['base_url']);
    }

    