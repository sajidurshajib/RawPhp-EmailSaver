<?php
    include '../config.php';
    include '../system/session.php';
    include '../helper/basic.php';
    include '../model/delete.php';

    $get_id=$_GET['id'];
    $username=per_session_show('user');
    delete_email($get_id,$username);
    redirect($config['base_url'].'view/search.php');