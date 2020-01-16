<?php 
    include '../config.php';
    $connectServer=mysqli_connect($db['server'],$db['username'],$db['password']);
    $connectDB=mysqli_connect($db['server'],$db['username'],$db['password'],$db['dbname']);