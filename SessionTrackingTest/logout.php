<?php
//logout code

function logout() {
    session_start();
    session_unset();
    session_destroy();

    header("Location: loginfunctionality.php");}
       
logout();
?>