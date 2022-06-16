<?php
    //creating a function 'logout' to delete session
    function logout(){
    
        if(isset($_SESSION)!==''||session_status() == PHP_SESSION_ACTIVE){
            session_destroy();
            header("Location:../forms/login.html");
        }
        
    }
    //function call
    logout();
?>