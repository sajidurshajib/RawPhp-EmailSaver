<?php
    include '../config.php';
    include '../system/session.php';
    include '../helper/basic.php';
    include '../model/check.php';
    include '../model/password.php';

    $username= per_session_show('user');
    $old_password= $_POST['op'];
    $new_password= $_POST['np'];

    $return = check($username,$old_password);
    
    if($return==1){
        update_password($username,$new_password);
        temp_session('p_up','Password update');
        redirect($config['base_url'].'view/profile.php');
    }
    else{
        temp_session('p_up','Old password not correct');
        redirect($config['base_url'].'view/profile.php');
    }