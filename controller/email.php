<?php
    include '../config.php';
    include '../system/session.php';
    include '../helper/basic.php';
    include '../model/insert3.php';
    include '../model/check.php';

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = per_session_show('user');

    insert3($fullname,$email,$username);
    if(check_email($fullname,$email,$username)==1){
        temp_session('email_saved','Saved successfully...');
    }
    else{
        temp_session('email_saved','Something wrong');
    }
    redirect($config['base_url'].'view/dashboard.php');
