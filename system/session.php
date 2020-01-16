<?php
    session_start();
    function per_session($name, $value){
        $_SESSION[$name]=$value;
    }

    function per_session_show($name){
        return $_SESSION[$name];
    }

    function per_session_unset($name){
        unset($_SESSION[$name]);
    }

    function per_session_check($name){
        if(isset($_SESSION[$name])){
            return 1;
        }
        else{
            return 0;
        }
    }

    //Temporary session

    function temp_session($name, $value){
        $_SESSION[$name]=$value;
    }

    function temp_session_show($name){
        if(isset($_SESSION[$name])){
            echo $_SESSION[$name];
            unset($_SESSION[$name]);

        }
    }