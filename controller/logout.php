<?php
    include '../config.php';
    include '../system/session.php';

    per_session_unset("user");
    header('Location: '.$config['base_url'].'view/login.php');