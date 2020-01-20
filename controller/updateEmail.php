<?php
    include '../config.php';
    include '../helper/basic.php';
    include '../system/session.php';
    include '../model/update.php';

    $id=per_session_show('update_email_id');
    $fullname=$_POST['update-fullname'];
    $email=$_POST['update-email'];

    update_email($id,$fullname,$email,per_session_show('user'));

    per_session_unset('update_email_id');
    redirect($config['base_url'].'view/search.php');

