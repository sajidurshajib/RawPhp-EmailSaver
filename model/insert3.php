<?php
    include 'connection.php';
    
    function insert3($name,$email,$username){
        global $connectDB; //outside variable aceess...
        $sql="INSERT INTO `emailtable`(`fullname`, `email`, `username`) VALUES ('$name','$email','$username')";
        mysqli_query($connectDB,$sql);
    }