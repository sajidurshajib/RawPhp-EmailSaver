<?php
    include 'connection.php';
    
    function update_email($get_id,$fullname,$email,$username){
        global $connectDB;
        $sql = "UPDATE emailtable SET `fullname`='$fullname', `email`='$email' WHERE `id`='$get_id' && `username`='$username'";
        mysqli_query($connectDB,$sql);
    }
    