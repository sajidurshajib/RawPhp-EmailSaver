<?php
    //$connDB=mysqli_connect($db['server'],$db['username'],$db['password'],$db['dbname']);

    $dbServer = $db['server'];
    $dbUser = $db['username'];
    $dbPass = $db['password'];
    $dbName = $db['dbname'];

    $connServer=mysqli_connect($db['server'],$db['username'],$db['password']);
    $dbchk="SHOW DATABASES LIKE '$dbName'";
    $db_row_query=mysqli_query($connServer,$dbchk);

    if(mysqli_num_rows($db_row_query)==0){
        
        global $dbServer;
        global $dbUser;
        global $dbPass;
        global $dbName;

        //DB create
        $connServer=mysqli_connect($dbServer,$dbUser,$dbPass);
        $sql = "CREATE DATABASE IF NOT EXISTS ".$dbName;
        mysqli_query($connServer,$sql);
        mysqli_close($connServer);
        
        $connDB=mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
        



        // sql to create table
        $sqltable = "CREATE TABLE usertable (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) NOT NULL,
            password VARCHAR(100) NOT NULL
            )";
            
        mysqli_query($connDB, $sqltable);

        


        // EmailTable
        $sqltableemail = "CREATE TABLE emailtable (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            username VARCHAR(100) NOT NULL
            )";

        mysqli_query($connDB, $sqltableemail);

        
        mysqli_close($connDB);
    }