<?php
    include 'connection.php';
    
    function insert($username,$password){
        global $connectDB; //outside variable aceess...
        $sql="INSERT INTO `usertable`(`username`, `password`) VALUES ('$username','$password')";
        mysqli_query($connectDB,$sql);
    }