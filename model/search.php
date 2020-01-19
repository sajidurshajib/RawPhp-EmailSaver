<?php
    include 'connection.php';

    function search_email($search,$username){
        global $connectDB;
        $sql = "SELECT * FROM `emailtable` WHERE `fullname` LIKE '%$search%' && `username`='$username'";
        $query = mysqli_query($connectDB, $sql);
        $row = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $row;
    }
    