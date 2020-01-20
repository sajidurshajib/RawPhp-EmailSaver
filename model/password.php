<?php
    include 'connection.php';
    
    function update_password($username,$new){
        global $connectDB;
        $sql = "UPDATE usertable SET `password`='$new' WHERE `username`='$username'";
        mysqli_query($connectDB,$sql);
    }
    