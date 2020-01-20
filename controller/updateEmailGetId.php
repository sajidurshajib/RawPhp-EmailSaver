<?php
    include '../config.php';
    include '../helper/basic.php';
    include '../system/session.php';

    per_session('update_email_id',$_GET['id']);
    redirect($config['base_url'].'view/updateEmail.php');
    