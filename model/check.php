<?php
    include 'connection.php';

    function check($username,$password){
        global $connectDB; //outside variable aceess...
        $sql = "SELECT `username` && `password` FROM usertable WHERE `username`='$username' && `password`='$password'";
        $result = mysqli_query($connectDB, $sql);

        if (mysqli_num_rows($result)>0){
            return 1;            
        }
        else{
            return 0;
        }
    }

    function check_user($username){
        global $connectDB; //outside variable aceess...
        $sql = "SELECT `username` FROM usertable WHERE `username`='$username'";
        $result = mysqli_query($connectDB, $sql);

        if (mysqli_num_rows($result)>0){
            return 1;            
        }
        else{
            return 0;
        }
    }


    //Check email
    function check_email($fullname,$email,$username){
        global $connectDB; //outside variable aceess...
        $sql = "SELECT `fullname` && `email` && `username` FROM emailtable WHERE `fullname`='$fullname' && `email`='$email' && `username`='$username'";
        $result = mysqli_query($connectDB, $sql);

        if (mysqli_num_rows($result)>0){
            return 1;            
        }
        else{
            return 0;
        }
    }