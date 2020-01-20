<?php
    include 'connection.php';
    
    function delete_email($get_id,$username){
        global $connectDB;
        $sql = "DELETE FROM emailtable WHERE `id`='$get_id' && `username`='$username'";
        mysqli_query($connectDB,$sql);
    }
    