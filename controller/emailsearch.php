<?php
    include '../config.php';
    include '../system/session.php';
    include '../helper/basic.php';
    include '../model/search.php';

    $searchname = $_GET['searchname'];
    $username=per_session_show('user');

    $result=search_email($searchname,$username);

    per_session('email_search',$result);
    redirect($config['base_url'].'view/search.php');
